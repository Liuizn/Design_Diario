<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Post</title>
    <link rel="stylesheet" href="{{ asset('css/style-create.css') }}">
    <link href="./output.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tiny.cloud/1/dmgo6fetywfansnjlqrukw8gmpsgk4dzwv3ht1b56b8n1tmo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'tinymcespellchecker',
            spellchecker_language: 'pt_PT',
            spellchecker_active: true,
            toolbar: 'bold italic underline | alignleft aligncenter alignright | bullist numlist | outdent indent',
            menubar: false,
            height: 800,
            branding: false,
            encoding: 'UTF-8',
            setup: function (editor) {
                editor.on('init', function () {
                    // Carrega o conteúdo inicial do servidor
                    const content = `
                            <p id="placeholder-titulo" style="font-size: 14px; font-weight: bold; color: #666;" contenteditable="false">Título:</p>
                            <h1 style="font-size: 24px; color: #000;">{{ old('titulo', $post->titulo) }}</h1>
                            <p id="placeholder-conteudo" style="font-size: 14px; font-weight: bold; color: #666;" contenteditable="false">Conteúdo:</p>
                            <p>{!! old('conteudo', $post->conteudo) !!}</p>
                        `.trim();

                    // Verifica se o conteúdo contém um título (<h1>)
                    const hasTitle = /<h1.*?>.*?<\/h1>/.test(content);

                    if (!content || !hasTitle) {
                        // Adiciona placeholders se não houver título ou conteúdo
                        editor.setContent(`
                            <p id="placeholder-titulo" style="font-size: 14px; font-weight: bold; color: #666;" contenteditable="false">Título:</p>
                            <h1 style="font-size: 24px; color: #000;">{{ old('titulo', $post->titulo) }}</h1>
                            <p id="placeholder-conteudo" style="font-size: 14px; font-weight: bold; color: #666;" contenteditable="false">Conteúdo:</p>
                            <p>{!! old('conteudo', $post->conteudo) !!}.</p>
                        `);
                    } else {
                        // Caso contrário, carrega o conteúdo do servidor
                        editor.setContent(content);
                    }
                });

                // Impede que placeholders sejam editados
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

            // Remove placeholders antes de enviar
            editorContent = editorContent
                .replace(/<p[^>]*id="placeholder-titulo"[^>]*>.*?<\/p>/gi, '') // Remove "Título:"
                .replace(/<p[^>]*id="placeholder-conteudo"[^>]*>.*?<\/p>/gi, ''); // Remove "Conteúdo:"

            tinymce.get('editor').setContent(editorContent); // Atualiza o editor com o conteúdo limpo

            // Validação do status: impede que "publicado" seja revertido para "rascunho"
            const currentStatus = document.getElementById('current-status').value;
            if (currentStatus === 'publicado' && status === 'rascunho') {
                alert('Não é permitido voltar um post publicado para rascunho.');
                return;
            }

            // Define o status do post
            document.getElementById('status').value = status;

            // Submete o formulário
            document.getElementById('editPostForm').submit();
        }
    </script>
</head>
<body>
    <div>
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <main>
            <!-- Formulário -->
            <form id="editPostForm" action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Campo oculto para status -->
                <input type="hidden" id="status" name="status" value="{{ $post->status }}">
                <input type="hidden" id="current-status" value="{{ $post->status }}">

                <!-- Upload da imagem -->
                <div class="form-group">
                    <div class="image-upload-container">
                        <label class="upload-button">
                            <input type="file" id="imageInput" name="imagem" accept="image/*" hidden>
                            <span class="upload-icon">+</span>
                        </label>
                        <div id="previewContainer" class="image-preview">
                            @if ($post->imagem)
                                <img src="{{ asset('storage/' . $post->imagem) }}" alt="Imagem Atual" style="width: 900px; height: 300px; object-fit: cover;">
                            @else
                                <p class="font-bold">Selecione uma imagem para o artigo</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Editor de texto -->
                <div class="form-group">
                    <textarea id="editor" name="conteudo">{!! old('conteudo', $post->conteudo) !!}</textarea>
                </div>
            </form>

            <!-- Botões de ação -->
            <div class="form-actions">
                <button type="button" class="draft-button" onclick="cleanPlaceholdersAndSubmit('rascunho')">
                    <img src="{{ asset('imagens/save-icon.png') }}" alt="Salvar" class="button-icon"> Salvar como Rascunho
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
                    previewImage.src = e.target.result; // Define a nova imagem carregada
                    previewImage.style.width = '900px'; // Largura fixa
                    previewImage.style.height = '300px'; // Altura fixa
                    previewImage.style.objectFit = 'cover'; // Ajusta o conteúdo da imagem
                    previewContainer.appendChild(previewImage);
                };
                reader.readAsDataURL(file); // Lê o arquivo como URL para exibição
            } else {
                // Caso nenhum arquivo seja selecionado
                previewContainer.innerHTML = '<p class="font-bold">Selecione uma imagem para o artigo</p>';
            }
        });
    </script>
</body>
</html>
