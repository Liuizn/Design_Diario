<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Post</title>
    <!-- Link para o estilo -->
    <link rel="stylesheet" href="{{ asset('css/style-create.css') }}">
    <link href="./output.css" rel="stylesheet">

    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/dmgo6fetywfansnjlqrukw8gmpsgk4dzwv3ht1b56b8n1tmo/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        // Inicialização do TinyMCE
        tinymce.init({
            selector: '#editor',
            plugins: 'tinymcespellchecker',
            spellchecker_language: 'pt_PT',
            spellchecker_active: true,
            toolbar: 'bold italic underline | alignleft aligncenter alignright | bullist numlist | outdent indent',
            menubar: false,
            height: 800,
            branding: false,
            encoding: 'UTF-8', // Habilita codificação UTF-8
            setup: function (editor) {
                editor.on('init', function () {
                    // Adiciona placeholders com IDs únicos
                    if (editor.getContent().trim() === '') {
                        editor.setContent(`
                            <p id="placeholder-titulo" style="font-size: 14px; font-weight: bold; color: #666;" contenteditable="false">Título:</p>
                            <h1 style="font-size: 24px; color: #000;">Digite o título aqui...</h1>
                            <p id="placeholder-conteudo" style="font-size: 14px; font-weight: bold; color: #666;" contenteditable="false">Conteúdo:</p>
                            <p>Digite o conteúdo aqui...</p>
                        `);
                    }
                });

                // Impede que os placeholders sejam editados ou removidos
                editor.on('keydown', function (e) {
                    const selection = editor.selection.getNode();
                    if (
                        selection.hasAttribute &&
                        selection.hasAttribute('id') &&
                        (selection.getAttribute('id') === 'placeholder-titulo' || selection.getAttribute('id') === 'placeholder-conteudo')
                    ) {
                        e.preventDefault();
                    }
                });
            }
        });

        function cleanPlaceholdersAndSubmit(status) {
            tinymce.triggerSave(); // Sincroniza o conteúdo do TinyMCE com o campo textarea

            // Obtém o conteúdo do editor
            let editorContent = tinymce.get('editor').getContent();

            // Remove placeholders
            editorContent = editorContent
                .replace(/<p[^>]*id="placeholder-titulo"[^>]*>.*?<\/p>/gi, '') // Remove placeholder "Título:"
                .replace(/<p[^>]*id="placeholder-conteudo"[^>]*>.*?<\/p>/gi, ''); // Remove placeholder "Conteúdo:"

            // Atualiza o editor com o conteúdo limpo
            tinymce.get('editor').setContent(editorContent);

            // Valida se o conteúdo do editor está vazio
            if (!editorContent.trim()) {
                alert('Por favor, preencha o título e o conteúdo antes de salvar ou publicar.');
                return;
            }

            // Valida se uma imagem foi selecionada
            const imageInput = document.getElementById('imageInput');
            if (!imageInput.files.length) {
                alert('Por favor, selecione uma imagem para o artigo.');
                return;
            }

            // Define o status do post
            document.getElementById('status').value = status;

            // Submete o formulário
            document.getElementById('postForm').submit();
        }
    </script>
</head>
<body>
    @include('layouts.navigation')
    <div>

        <div id="error-message" class="error-message hidden">
            <ul id="error-list"></ul>
        </div>

        <main>
            <!-- Formulário -->
            <form id="postForm" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Campo oculto para status -->
                <input type="hidden" id="status" name="status" value="rascunho">

                <!-- Upload da imagem -->
                <div class="form-group">
                    <div class="image-upload-container">
                        <label class="upload-button">
                            <input type="file" id="imageInput" name="imagem" accept="image/*" hidden>
                            <span class="upload-icon">+</span>
                        </label>
                        <div id="previewContainer" class="image-preview">
                            <p class="font-bold">Selecione uma imagem para o artigo</p>
                        </div>
                    </div>
                </div>

                <!-- Editor de texto -->
                <div class="form-group">
                    <textarea id="editor" name="conteudo"></textarea>
                </div>
            </form>
            <!-- Botões de ação fora do formulário -->
            <div class="form-actions">
                <button type="button" class="draft-button" onclick="cleanPlaceholdersAndSubmit('rascunho')">
                    <img src="{{ asset('imagens/save-icon.png') }}" alt="Salvar" class="button-icon"> Salvar Rascunho
                </button>
                <button type="button" class="publish-button" onclick="cleanPlaceholdersAndSubmit('publicado')">
                    <img src="{{ asset('imagens/publish-icon.png') }}" alt="Publicar" class="button-icon"> Publicar
                </button>
            </div>
        </main>
    </div>
    <script>
        document.getElementById('imageInput').addEventListener('change', function (event) {
            const file = event.target.files[0]; // Obtém o arquivo selecionado
            const previewContainer = document.getElementById('previewContainer');
            const previewImage = document.createElement('img'); // Cria um elemento <img>

            previewContainer.innerHTML = ''; // Limpa a pré-visualização anterior

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result; // Define a imagem carregada
                    previewImage.style.width = '900px'; // Largura fixa
                    previewImage.style.height = '300px'; // Altura fixa
                    previewImage.style.objectFit = 'cover'; // Ajusta o conteúdo da imagem
                    previewContainer.appendChild(previewImage);
                };
                reader.readAsDataURL(file); // Lê o arquivo como URL para exibição
            } else {
                previewContainer.innerHTML = '<p>Selecione uma imagem para o artigo</p>';
            }
        });

    </script>

</body>
</html>
