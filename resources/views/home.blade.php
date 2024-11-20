@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <div class="flex flex-col flex-wrap items-center align-center self-center w-fit mb-20">
            <div class="flex flex-row flex-wrap justify-center w-auto">
                <x-post-card postImageCover="https://149361125.v2.pressablecdn.com/wp-content/uploads/2018/09/Sala-1.jpg" postTitle="Design de Interiores: Tendências de 2025" authorName="Lucas Ramil" authorProfilePic="https://img.freepik.com/fotos-gratis/retrato-de-homem-branco-isolado_53876-40306.jpg" postUrl="" fullWidth="false"/>
                <x-post-card postImageCover="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQOatWan22RMjNdeg-XcPzpyjkn_wdKDXUdw&s" postTitle="A Evolução do Design Gráfico: Do Análogo ao Digital" authorName="Marcos Kahzan" authorProfilePic="https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2023/06/india.webp?w=495" postUrl="" fullWidth="false"/>
            </div>
            <div class="flex flex-row flex-wrap justify-center w-auto">
                <x-post-card postImageCover="https://w0.peakpx.com/wallpaper/262/444/HD-wallpaper-artificial-intelligence-cyber-intelligence.jpg" postTitle="Como a Inteligência Artificial está transformando o trabalho dos Designers?" authorName="Kelly Dantas" authorProfilePic="https://img.cancaonova.com/cnimages/canais/uploads/sites/6/2018/03/formacao_1600x1200-como-a-presenca-da-mulher-pode-ser-harmonia-no-mundo.jpg" postUrl="" fullWidth="false"/>
                <x-post-card postImageCover="https://qualificar.es.gov.br/Media/Qualificares/_Profiles/c4d8c6e6/6714d3e9/business-womens-working.jpg?v=638582096855927050" postTitle="Design inclusivo: Criando experiências acessíveis para todos" authorName="Elizabeth Farias" authorProfilePic="https://img.freepik.com/fotos-gratis/feliz-bonito-mulher-jovem-posar-camera-em-parque-cidade_1262-19158.jpg" postUrl="" fullWidth="false"/>
            </div>
            <div class="flex flex-row flex-wrap justify-center w-auto">
                <x-post-card postImageCover="https://png.pngtree.com/thumb_back/fw800/background/20231002/pngtree-illustration-of-a-3d-render-showcasing-a-concept-of-web-ui-image_13584942.png" postTitle="Ui e UX: Criando Interfaces Intuitivas e Seguras para Motoristas" authorName="Jennifer Shneur" authorProfilePic="https://static.vecteezy.com/ti/fotos-gratis/t1/50978583-sereno-loiras-mulher-com-intenso-olhar-foto.jpg" postUrl="" fullWidth="true"/>
            </div>
        </div>
        <div class="flex flex-col flex-wrap pt-4">
            <div class="flex flex-row align-center mb-10">
                <span class="text-3xl font-bold italic bg-lime-300 text-end pr-4 p-1 rounded-tr-lg rounded-br-lg shadow-md" style="width: 400px;">Autores Populares</span>
            </div>
            <div class="flex flex-col flex-wrap items-center align-center self-center w-fit mb-20">
                <x-highlighted-author-container authorName="Lucas Ramil" authorDescription="Lucas Ramil é um web designer que contribui para o Design Diário, uma plataforma de artigos para designers. Seus textos focam em UX e UI para sites de e-commerce, apresentando soluções práticas para melhorar a navegação, otimizar o processo de checkout e criar interfaces atraentes que aumentam a conversão de vendas." authorProfileLink="" authorProfilePic="https://img.freepik.com/fotos-gratis/retrato-de-homem-branco-isolado_53876-40306.jpg" authorFollowersData="124" authorVerifiedArticlesData="54"></x-highlighted-author-container>
            </div>
            <div class="flex flex-col flex-wrap items-center align-center self-center w-fit mb-20">
                <x-highlighted-author-container authorName="Rafaela Silva" authorDescription="Rafaela Silva é uma designer editorial que compartilha seu conhecimento no Design Diário, uma plataforma de artigos para designers. Seus conteúdos abordam tipografia, diagramação e layout para revistas e livros, oferecendo dicas valiosas sobre como criar projetos visuais impactantes e equilibrados que melhoram a leitura e a experiência do usuário." authorProfileLink="" authorProfilePic="https://www.dci.com.br/wp-content/uploads/2021/02/cabelo-cacheado-franja.jpg" authorFollowersData="124" authorVerifiedArticlesData="54"></x-highlighted-author-container>
            </div>
        </div>
    </div>
@endsection