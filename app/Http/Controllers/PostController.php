<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Posts;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Recupera todos os posts, com ordenação do mais recente para o mais antigo
        $posts = Posts::orderBy('created_at', 'desc')->get();
        return view('post.index-post', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos campos
        $validated = $request->validate([
            'conteudo' => 'required|string', // O conteúdo deve ser obrigatório e uma string
            'imagem' => 'required|image|mimes:jpeg,png,jpg|max:2048', // A imagem é obrigatória
            'status' => 'required|in:rascunho,publicado', // Garante que o status é válido
        ], [
            'conteudo.required' => 'O título e o conteúdo são obrigatórios.',
            'imagem.required' => 'A imagem é obrigatória.',
            'imagem.image' => 'O arquivo selecionado deve ser uma imagem válida.',
            'imagem.mimes' => 'A imagem deve estar no formato jpeg, png, jpg.',
            'imagem.max' => 'A imagem não pode ter mais que 2MB.',
        ]);

        // Obtém o conteúdo do editor
        $conteudo = $request->input('conteudo');

        // Extrai o título usando regex
        preg_match('/<h1.*?>(.*?)<\/h1>/', $conteudo, $matches);
        $titulo = isset($matches[1]) ? strip_tags($matches[1]) : 'Sem título';
        // Decodifica entidades HTML no título
        $titulo = html_entity_decode($titulo, ENT_QUOTES, 'UTF-8');

        // Remove o título do conteúdo
        $conteudoLimpado = preg_replace('/<h1.*?>.*?<\/h1>/', '', $conteudo);
        $conteudoLimpado = trim($conteudoLimpado);

        // Decodifica entidades HTML no conteúdo
        $conteudoLimpado = html_entity_decode($conteudoLimpado, ENT_QUOTES, 'UTF-8');

        // Salva a imagem
        $imagemPath = $request->file('imagem')->store('imagens_posts', 'public');

        // Cria o post no banco de dados
        Posts::create([
            'titulo' => $titulo, // Salva o título extraído
            'conteudo' => $conteudoLimpado, // Salva o conteúdo limpo
            'imagem' => $imagemPath, // Caminho da imagem
            'status' => $request->input('status'), // Status enviado pelo formulário
        ]);

        // Redireciona para a lista de posts com mensagem de sucesso
        return redirect()->route('posts.index')->with('success', 'Post salvo com sucesso!');
    }




    /**
     * Display the specified resource.
     */
    public function show(Posts $post)
    {
        // Usa uma regex para capturar o primeiro <h1> do conteúdo
        preg_match('/<h1>(.*?)<\/h1>/', $post->conteudo, $matches);

        // Extrai o título do match ou define um título padrão
        $titulo = $matches[1] ?? 'Post Sem Título';

        // Remove entidades HTML e trata o charset UTF-8
        $titulo = html_entity_decode(strip_tags($titulo), ENT_QUOTES, 'UTF-8');

        // Retorna a view com o post e o título
        return view('post.show-post', compact('post', 'titulo'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $post)
    {
        return view('post.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
        {
            $post = Posts::findOrFail($id);

            // Validação dos campos obrigatórios
            $validated = $request->validate([
                'conteudo' => 'required|string',
                'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'status' => 'required|in:rascunho,publicado',
            ], [
                'conteudo.required' => 'O título e o conteúdo são obrigatórios.',
                'imagem.image' => 'O arquivo deve ser uma imagem válida.',
                'imagem.mimes' => 'A imagem deve estar no formato jpeg, png, jpg ou gif.',
                'imagem.max' => 'A imagem não pode ter mais que 2MB.',
            ]);

            $conteudo = $validated['conteudo'];

            // Extrai o título do conteúdo
            preg_match('/<h1.*?>(.*?)<\/h1>/', $validated['conteudo'], $matches);
            $titulo = isset($matches[1]) ? strip_tags($matches[1]) : 'Sem título';

            // Decodifica entidades HTML no título
            $titulo = html_entity_decode($titulo, ENT_QUOTES, 'UTF-8');

            // Remove o título do conteúdo para armazenamento separado
            $conteudoLimpado = preg_replace('/<h1.*?>.*?<\/h1>/', '', $conteudo);
            $conteudoLimpado = trim($conteudoLimpado);

            // Decodifica entidades HTML no conteúdo
            $conteudoLimpado = html_entity_decode($conteudoLimpado, ENT_QUOTES, 'UTF-8');

            // Validação do status: impede que "publicado" seja revertido para "rascunho"
            if ($post->status === 'publicado' && $validated['status'] === 'rascunho') {
                return back()
                    ->withErrors(['status' => 'Não é permitido voltar um post publicado para rascunho.']);
            }

            // Atualiza a imagem, se necessário
            if ($request->hasFile('imagem')) {
                $imagemPath = $request->file('imagem')->store('imagens_posts', 'public');
                $post->imagem = $imagemPath;
            }

            // Atualiza o post no banco de dados
            $post->update([
                'titulo' => $titulo,
                'conteudo' => trim($conteudoLimpado),
                'imagem' => $post->imagem,
                'status' => $validated['status'], // Apenas rascunho ou publicado, conforme validação
            ]);

            // Redireciona para a lista de posts com mensagem de sucesso
            return redirect()->route('posts.index')->with('success', 'Post atualizado com sucesso!');
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $post)
    {
        // Excluir imagem se existir
        if ($post->imagem && Storage::exists('public/' . $post->imagem)) {
            Storage::delete('public/' . $post->imagem);
        }

        // Excluir o post
        $post->delete();

        return redirect()->route('post.index-post')->with('success', 'Post deletado com sucesso!');
    }

}
