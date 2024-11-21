@extends('layouts.app')

@section('content')
    <style>nav { background-color: #0f1959!important; } main { background-image: linear-gradient(to bottom, #0f1959, #154aa0); }</style>
    <div class="flex flex-col">
        <div class="flex flex-row flex-wrap align-center justify-center mb-20">
            <x-home-carousel></x-home-carousel>
        </div>
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
        <div class="flex flex-row align-center justify-end flex-wrap p-5">
            <div class="bg-lime-300 p-2 ml-2 hover:bg-lime-100 transition-all duration-300" style="border-radius: 100%; cursor: pointer;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#154aa0"  class="icon icon-tabler icons-tabler-filled icon-tabler-brand-youtube"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-12a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-9 6v6a1 1 0 0 0 1.514 .857l5 -3a1 1 0 0 0 0 -1.714l-5 -3a1 1 0 0 0 -1.514 .857z" /></svg>
            </div>
            <div class="bg-lime-300 p-2 ml-2 hover:bg-lime-100 transition-all duration-300" style="border-radius: 100%; cursor: pointer;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"  stroke="#154aa0"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-behance"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 18v-12h4.5a3 3 0 0 1 0 6a3 3 0 0 1 0 6h-4.5" /><path d="M3 12l4.5 0" /><path d="M14 13h7a3.5 3.5 0 0 0 -7 0v2a3.5 3.5 0 0 0 6.64 1" /><path d="M16 6l3 0" /></svg>
            </div>
            <div class="bg-lime-300 p-2 ml-2 hover:bg-lime-100 transition-all duration-300" style="border-radius: 100%; cursor: pointer;">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="#154aa0"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg>
            </div>
            <div class="bg-lime-300 p-2 ml-2 hover:bg-lime-100 transition-all duration-300" style="border-radius: 100%; cursor: pointer;">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="#154aa0"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>
            </div>
            <div class="bg-lime-300 p-2 ml-2 hover:bg-lime-100 transition-all duration-300" style="border-radius: 100%; cursor: pointer;">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="#154aa0"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 11v5" /><path d="M8 8v.01" /><path d="M12 16v-5" /><path d="M16 16v-3a2 2 0 1 0 -4 0" /><path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" /></svg>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.swiper', {
                slidesPerView: 1, // Um slide visível por vez
                spaceBetween: 10, // Espaço entre os slides (em pixels)
                loop: false, // Ativa o looping infinito
                autoplay: {
                    delay: 7000, // Troca automática a cada 3 segundos
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true, // Permite clicar nos pontos da paginação
                },
                on: {
                    init: function () {
                        document.querySelectorAll('.swiper-pagination-bullet').forEach(bullet => {
                            bullet.style.backgroundColor = '#fff';
                        });
                    },
                    slideChangeTransitionStart: function () {
                        document.querySelectorAll('.swiper-pagination-bullet-active').forEach(activeBullet => {
                            activeBullet.style.backgroundColor = '#fff';
                        });

                        document.querySelectorAll('.swiper-pagination-bullet:not(.swiper-pagination-bullet-active)').forEach(inactiveBullet => {
                            inactiveBullet.style.backgroundColor = '#fff';
                        });
                    },
                }
            });
        });
    </script>
@endsection