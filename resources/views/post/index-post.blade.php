<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h2>Lista de Posts</h2>
            <!-- Botão para criar novo post -->
            <a href="{{ route('posts.create') }}" class="create-button">Criar Novo Post</a>
        </header>

        <main>
            <!-- Mensagem de sucesso -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Listagem dos posts -->
            @if ($posts->isEmpty())
                <p>Não há posts disponíveis.</p>
            @else
                @foreach ($posts as $post)
                   <div class="post-card">
                       @if ($post->imagem)
                           <img src="{{ asset('storage/' . $post->imagem) }}" alt="Imagem do Post" class="post-image">
                       @endif

                       <h3>{{ strip_tags(substr($post->conteudo, 0, 50)) }}...</h3>
                       <p>{{ strip_tags(substr($post->conteudo, 0, 100)) }}...</p>

                       <small>Status: {{ ucfirst($post->status) }}</small> <!-- Mostra o status do post -->

                       <div class="post-actions">
                           <a href="{{ route('posts.show', $post->id) }}" class="view-button">Visualizar</a>
                           <a href="{{ route('posts.edit', $post->id) }}" class="edit-button">Editar</a>

                           <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="delete-button" onclick="return confirm('Tem certeza que deseja deletar este post?')">Deletar</button>
                           </form>
                       </div>
                   </div>
                @endforeach
            @endif
        </main>
    </div>
</body>
</html>
