<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Postagem;
use Illuminate\Http\Request;

class PostagemController extends Controller
{
    public function index()
    {
        $posts = Postagem::paginate(10); //-> por padrão , ele exibe 15 postagens por página

        //$posts = Postagem::get();

        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreUpdatePost $request) //vamos inserir o request que criamos para que ele valide os dados inseridos seguindo as regras que estabelecemos
    {
        Postagem::create($request->all());

        return redirect()
            ->route('post.home')
            ->with('message', 'Postagem criada com sucesso');
    }

    public function show($id)
    {
        if (!$post = Postagem::find($id)) {
            return redirect()->route('post.home');
        }

        return view('show', compact('post'));
    }

    public function destroy($id)
    {
        if (!$post = Postagem::find($id))

            return redirect()->route('post.home');
        $post->delete();

        return redirect()
            ->route('post.home')
            ->with('message', 'Postagem deletada com sucesso');
    }

    public function edit($id)
    {
        if (!$post = Postagem::find($id)) {
            return redirect()->back(); //retorna para de onde veio
        }
        return view('edit', compact('post'));
    }

    public function update(StoreUpdatePost $request, $id)
    {
        if (!$post = Postagem::find($id)) {
            return redirect()->route('post.home');
        }

        $post->update($request->all());

        return redirect()
            ->route('post.home')
            ->with('message', 'Postagem atualizada com sucesso'); //mensagem que vai aparece quando retornar para a página home
    }
}
