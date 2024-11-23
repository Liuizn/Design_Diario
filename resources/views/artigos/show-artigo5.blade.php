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
            <span>Design Inclusivo: Criando Experiências Acessíveis para Todos</span>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-8">
        <!-- Post Image -->
        <div class="mb-6 text-center">
            <img src="{{ asset('img_artigos/artigo5-prin.png') }}" alt="Imagem do Post" class="post-image shadow-lg rounded-lg">
        </div>

        <!-- Post Content -->
        <article>
            <h1 class="text-4xl font-bold mb-4">Design Inclusivo:</h1>
            <h2 class="text-2xl text-gray-600 mb-6">Criando Experiências Acessíveis para Todos</h2>
            <div class="prose prose-blue max-w-none text-justify">
                <p>O design inclusivo é uma abordagem que visa criar experiências e produtos que atendam às necessidades de todas as pessoas, independentemente de suas limitações físicas, sociais ou linguísticas. Esse conceito, que se tornou cada vez mais relevante no mundo do design moderno, não apenas enriquece a vida dos usuários, mas também promove a inclusão social em todas as esferas.</p>

                <h2><strong>O Que é Design Inclusivo?</strong></h2>
                <p>Design inclusivo envolve a criação de soluções que sejam funcionais e intuitivas para o maior número possível de pessoas. Ele se baseia na ideia de que todos, independentemente de suas capacidades, devem ser capazes de interagir com produtos e ambientes sem barreiras.</p>

                <h2><strong>Acessibilidade Digital</strong></h2>
                <p>No ambiente digital, o design inclusivo se traduz em sites, aplicativos e plataformas que podem ser usados por todos, incluindo pessoas com deficiência. Isso inclui fontes com contraste adequado, textos descritivos para imagens e uma navegação intuitiva. Acessibilidade digital é mais do que uma exigência legal; é um passo fundamental para criar um ambiente inclusivo online.</p>

                <h2><strong>Design Universal</strong></h2>
                <p>O design universal vai além, abrangendo itens físicos e espaços públicos. A ideia é criar produtos e ambientes que possam ser usados por qualquer pessoa, independentemente de suas habilidades. Um exemplo clássico é a porta automática, que beneficia a todos, sejam pessoas com mobilidade reduzida ou quem está carregando objetos.</p>

                <h2><strong>Benefícios do Design Inclusivo</strong></h2>
                <p>Além de atender às necessidades de grupos específicos, o design inclusivo beneficia a todos. Soluções mais simples e intuitivas geralmente resultam em maior satisfação do usuário, enquanto empresas que investem em inclusão frequentemente se destacam pela inovação e responsabilidade social.</p>

                <p>O design inclusivo não é apenas uma tendência; é uma necessidade. Ele transforma o mundo ao nosso redor, tornando-o mais acessível, justo e igualitário. Desde ambientes físicos até experiências digitais, os princípios do design inclusivo estão moldando um futuro mais acolhedor e funcional para todos.</p>

                <p>E você, aplica o design inclusivo nos seus projetos? Compartilhe nos comentários como você pensa em tornar suas criações mais acessíveis!</p>
            </div>
        </article>

        <!-- Post Metadata -->
        <div class="text-sm mt-6">
            <p>Publicado em 22/09/2024</p>
            <p>Publicado por Jennifer Shneur</p>
        </div>
    </main>

    <!-- Comments Section -->
    <section class="container comments-section">
        <div class="comments-header">
            <span>Comentários</span>
            <span class="comment-count">4</span>
        </div>
        <div class="space-y-4">
            <div class="comment">
                <strong>César Almeida</strong>
                Achei o conceito de Design Inclusivo muito útil, ainda mais na área de educação. Sempre me esforço para criar materiais que sejam acessíveis para todos. O artigo está ótimo!
            </div>
            <div class="comment">
                <strong>Lucas Ferreira</strong>
                Excelente abordagem! Como estudante, sempre tento aplicar esses conceitos nos meus projetos. O design universal é realmente inspirador.
            </div>
            <div class="comment">
                <strong>Marina Costa</strong>
                O artigo é claro e direto. Mostra o quanto o design inclusivo pode transformar experiências e criar um mundo mais justo. Parabéns!
            </div>
            <div class="comment">
                <strong>Rafael Santos</strong>
                Trabalhando com desenvolvimento web, vejo o impacto da acessibilidade digital diariamente. É incrível como pequenas mudanças podem fazer uma grande diferença.
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
                    <img src="{{ asset('img_artigos/artigo5-seg.png') }}" alt="Imagem do Artigo"
                         class="bg-gradient-to-r from-cyan-500 to-blue-500 shadow-lg w-full h-full object-cover object-[20%_0%] rounded-lg" style="transform: translateX(-40px);">
                    <!-- Texto dentro da imagem -->
                    <div class="absolute inset-0 flex flex-col justify-center items-end pr-12">
                        <p class="text-black font-semibold text-lg text-right leading-snug">
                            <span class="font-bold">UI vs. UX: Entendendo as</span><br>
                            Diferenças e a Importância<br>
                            <span class="italic">de cada uma</span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Autor do Artigo -->
            <div class="container-autor flex flex-col rounded-lg mr-32 border-b-4 items-center bg-lime-400 p-20 max-w-[200px]">
                <img src="{{ asset('img_artigos/artigo5-autor.png') }}" alt="Imagem do Autor"
                    class="rounded-full w-24 h-24 shadow-md mb-4  object-[40%_5%] ">
                <p class="font-bold text-lg text-center">Por <span class="text-blue-900">Jennifer Shneur</span></p>
                <div class="flex justify-around text-blue-900 my-4 w-full">
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-lg">person</span>
                        <p>307</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-icons text-lg">article</span>
                        <p>20</p>
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
