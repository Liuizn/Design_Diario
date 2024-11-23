<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design de Interiores:</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Tailwind integrado -->
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #121E69; /* Cor do texto */
            background: linear-gradient(to top, #8790b6, #dce3ee); /* Gradiente de fundo */
        }

        .container {
            max-width: 1350px;
            margin: 0 auto;
        }

        .container2 {
            max-width: 1600px;
            padding-top: 5px;
            padding-bottom: 5px;
            margin: 0 auto;
        }

        .container-footer {
            max-width: ;
            margin: 0 auto;
        }

        .container-autor {
            max-width: 1350px;
            margin: 10px auto;
            margin-left: 925px;
        }
         /* Estilo para os textos do conteúdo */
        .prose {
            line-height: 1.8; /* Espaçamento entre linhas */
            letter-spacing: 0.5px; /* Espaçamento entre caracteres */
        }

        .prose p {
            margin-bottom: 1.5rem; /* Distância entre os parágrafos */
        }

        .prose h2 {
            margin-top: 2rem; /* Espaço antes do título */
            margin-bottom: 1.5rem; /* Espaço após o título */
            font-size: 1.75rem; /* Tamanho do subtítulo */
            color: #121E69;
            font-weight: bold;
        }

        .prose ol {
            margin: 1.5rem 0; /* Espaçamento antes e depois da lista */
            padding-left: 2rem; /* Recuo da lista */
        }

        .prose ol li {
            margin-bottom: 1rem; /* Espaçamento entre itens da lista */
        }

        .prose strong {
            color: #121E69; /* Destaque para os textos em negrito */
        }

        /* Metadados do post */
        .text-sm {
            margin-top: 2rem;
            font-size: 0.875rem;
            color: #6B7280; /* Cinza suave */
        }

        .post-image {
            width: 1350px;
            height: 300px;
            object-fit: cover;
            margin: 0 auto;
            display: block;
        }

        .comments-header {
            background-color: #121E69; /* Fundo azul escuro */
            color: #9BE43E; /* Texto verde */
            font-weight: bold;
            padding: 0.5rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 8px;
            width: 200px; /* Largura ajustada */
        }

        .comments-header .comment-count {
            background-color: white;
            color: #121E69;
            font-size: 0.875rem;
            font-weight: bold;
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
        }

        .comment {
            background-color: #f8f9fa; /* Fundo claro para os comentários */
            padding: 1rem;
            margin-top: 1.5rem; /* Distância entre os comentários */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        .comment strong {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .comment-box {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #D5DCE8;
            padding: 1rem;
            border-radius: 8px;
            cursor: pointer;
            background-color: #f8f9fa;
        }

        .comment-box:hover {
            background-color: #f0f9f0; /* Fundo claro ao passar o mouse */
        }

        .comment-box p {
            margin: 0;
            font-size: 1rem;
            font-weight: bold;
            color: #96A0B1;
        }

        .comment-box .add-icon {
            margin-left: 1rem;
            color: #9BE43E;
            font-size: 1.5rem;
        }

        /* Aumentando a distância entre o texto do autor e os comentários */
        .comments-section {
            margin-top: 3rem; /* Distância maior */
        }

        /* Espaçamento entre "Adicionar Comentário" e o rodapé */
        .comment-box {
            margin-bottom: 3rem; /* Espaço extra antes do rodapé */
        }

        .object-cover {
            transform: translateX(-50px); /* Move a imagem 50px para a esquerda */
        }

        .relative.group {
            padding-left: 100px; /* Adiciona um espaçamento interno no container */
            position: relative; /* Garante que a imagem esteja contida */
        }

        .object-cover {
            width: 100%; /* Mantém a largura da imagem responsiva */
            height: 100%; /* Preenche a altura do container */
            object-fit: cover; /* Ajusta a proporção da imagem */
            border-radius: 8px; /* Bordas arredondadas */
        }

        .blur-overlay {
            position: absolute; /* Fixa o blur no mesmo lugar da imagem */
            inset: 0; /* Preenche todo o container da imagem */
            background-color: rgba(18, 30, 105, 0.3); /* Blur azul translúcido */
            backdrop-filter: blur(4px); /* Adiciona o efeito de blur */
            border-radius: 8px; /* Mesma borda arredondada da imagem */
            pointer-events: none; /* Evita interferência no clique */
        }


    </style>
</head>


<body class="min-h-screen flex flex-col justify-between">

    <!-- Header -->
    <header class="bg-blue-900 text-white py-4">
        <div class="container flex justify-between items-center">
            <h1 class="text-lg font-bold">Meu Perfil</h1>
        </div>
    </header>

    <!-- Breadcrumb -->
    <nav class="py-2 px-4">
        <div class="container2">
            <a href="{{ route('posts.index') }}" class="hover:underline">Home</a> >
            <span>A Evolução do Design Gráfico:</span>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-8">
        <!-- Post Image -->
        <div class="mb-6 text-center" >
            <img src="{{ asset('img_artigos/artigo2-prin.png') }}" alt="Imagem do Post" class="post-image shadow-lg rounded-lg">
        </div>

        <!-- Post Content -->
        <article>
            <h1 class="text-4xl font-bold mb-4">A Evolução do Design Gráfico:</h1>
            <h2 class="text-2xl text-gray-600 mb-6">Do Analógico ao Digital</h2>
            <div class="prose prose-blue max-w-none text-justify">
                <p>O design gráfico percorreu um longo caminho desde seus anos analógicos até a era digital em que vivemos hoje. Essa evolução não só moldou a forma como os designers trabalham, mas também como a comunicação visual molda nosso cotidiano.</p>

                <h2>Era Analógica: O Início de Tudo</h2>
                <p>Antes da revolução digital, o design gráfico era completamente manual. Ferramentas como pranchetas, réguas, lápis e tinta eram indispensáveis. Cada peça gráfica era feita com precisão milimétrica, um processo trabalhoso, mas que resultava em obras de arte tangíveis, muitas vezes únicas. Esse período ensinou os designers a valorizarem cada detalhe do processo criativo.</p>

                <h2>A Chegada do Computador</h2>
                <p>Com os anos 80, surgiu a popularização dos computadores pessoais, e o design gráfico começou a se aproximar do que conhecemos hoje. Ferramentas como o Photoshop abriram portas para a manipulação digital, algo que jamais seria possível com métodos tradicionais. A transição foi gradual, e muitos profissionais optaram por mesclar técnicas analógicas com as digitais, criando um novo estilo que impactaria o universo gráfico.</p>

                <h2>Design Digital: O Novo Design</h2>
                <p>Com a internet se tornando parte essencial da vida cotidiana, o design gráfico digital se solidificou. O foco não era mais apenas imprimir materiais visualmente atraentes, mas também criar experiências digitais interativas que engajassem o público. Com isso, surgiram novas linguagens visuais, cada vez mais imersivas e dinâmicas.</p>

                <h2>O Futuro do Design</h2>
                <p>A evolução do design gráfico reflete um mundo dinâmico, repleto de inovações e adaptações. A tendência é cada vez mais integrar tecnologias como inteligência artificial e realidade aumentada, criando novas oportunidades para a comunicação visual. Ainda assim, o valor do toque humano e das técnicas tradicionais não deve ser subestimado, pois proporcionam um equilíbrio entre o tecnológico e o tangível.</p>

                <p>Em resumo, o design gráfico atual é um reflexo da harmonização entre técnicas analógicas e digitais. Ao olharmos para o futuro, é emocionante imaginar as possibilidades e inovações que ainda estão por vir.</p>
            </div>
        </article>

        <!-- Post Metadata -->
        <div class="text-sm mt-6">
            <p>Publicado em 22/09/2024</p>
            <p>Atualizado por Marcos Kahzan</p>
        </div>
    </main>

    <!-- Comments Section -->
    <section class="container comments-section">
        <div class="comments-header">
            <span>Comentários</span>
            <span class="comment-count">3</span>
        </div>
        <div class="space-y-4">
            <div class="comment">
                <strong>André Matos</strong>
                Excelente artigo! Comecei minha carreira ainda no final da era analógica, quando fazíamos tudo à mão, e é incrível ver o quanto as ferramentas digitais facilitaram e agilizaram o processo criativo. Mas confesso que, de vez em quando, ainda sinto saudades de trabalhar ideias no papel antes de passar para o computador. Acho que essa combinação entre o analógico e o digital traz o melhor dos mundos.
            </div>
            <div class="comment">
                <strong>Luana Santos</strong>
                Que artigo inspirador! Estou no começo da minha jornada como designer e é fascinante ver como o design gráfico evoluiu tanto. Eu comecei a aprender tudo no digital, mas estou curiosa para explorar algumas técnicas analógicas também, como sketching e tipografia à mão. Alguém tem dicas de por onde começar com técnicas analógicas?
            </div>
            <div class="comment">
                <strong>Gustavo Andrade</strong>
                Perfeito! A evolução do design gráfico realmente transformou a maneira como comunicamos visualmente. Eu me lembro de quando o Photoshop ainda era uma ferramenta básica, e hoje, com tantas opções e recursos, o processo criativo é praticamente ilimitado. É desafiador agora equilibrar a infinidade de possibilidades com um design que continue sendo claro e impactante.
            </div>
        </div>

        <!-- Add Comment Box -->
        <div class="comment-box">
            <p>Deixe um comentário</p>
            <span class="add-icon">+</span>
        </div>
    </section>

    <!-- Navigation Footer -->
    <footer class="py-6">
        <div class="container-footer mx-auto flex justify-between items-start gap-6">
            <!-- Próximo Artigo Sugerido -->
            <div class=" text-left">
                <p class="bg-lime-400 text-blue-900 px-36 py-3 rounded-r-lg inline-block font-bold text-left mb-10">
                    Próximo Artigo Sugerido...
                </p>
                <div class="relative group cursor-pointer w-[600px] h-[150px] ml-[50px]">
                    <!-- Imagem com tamanho fixo e ajuste para a esquerda -->
                    <img src="{{ asset('img_artigos/artigo2-seg.png') }}" alt="Imagem do Artigo"
                         class="bg-gradient-to-r from-cyan-500 to-blue-500 shadow-lg w-full h-full object-cover object-[20%_85%] rounded-lg" style="transform: translateX(-40px);">
                    <!-- Texto dentro da imagem -->
                    <div class="absolute inset-0 flex flex-col justify-center items-end pr-12">
                        <p class="text-black font-semibold text-lg text-right leading-snug">
                            <span class="font-bold">As Ferramentas Essenciais</span><br>
                            para Iniciantes no Design Gráfico:<br>
                            <span class="italic">Do Papel ao Digital</span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Autor do Artigo -->
            <div class="container-autor flex flex-col rounded-lg mr-32 border-b-4 items-center bg-lime-400 p-20 max-w-[200px]">
                <img src="{{ asset('img_artigos/artigo2-autor.png') }}" alt="Imagem do Autor"
                    class="rounded-full w-24 h-24 shadow-md mb-4  object-[40%_5%] ">
                <p class="font-bold text-lg text-center">Por <span class="text-blue-900">Marcos Kahzan</span></p>
                <div class="flex justify-around text-blue-900 my-4 w-full">
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-lg">person</span>
                        <p>200</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-lg">article</span>
                        <p>15</p>
                    </div>
                </div>
                <div class="space-y-2 w-full">
                    <button
                        class="bg-blue-900 text-green-400 px-4 py-2 rounded-lg font-bold w-full hover:bg-blue-800 transition">
                        Seguir
                    </button>
                    <button
                        class="border-2 border-blue-900 text-blue-900 px-4 py-2 rounded-lg font-bold w-full hover:bg-blue-900 hover:text-white transition">
                        Ver perfil
                    </button>
                </div>
            </div>
        </div>
    </footer>



</body>
</html>
