<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chango&family=Dosis:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div id="container-index">
        <h1>Postagens</h1>
        <br>
        <a class="btn btn-primary" href="{{route('post.create')}}"> Nova Postagem</a>
        <hr>
        <table class="table table-light table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
                @foreach ($posts as $post)
            <tbody >
                <th scope="row">{{$post->id}}</th>
                <td scope="row">{{ $post->titulo }}</td>
                <td scope="row">{{ $post->autor }}</td>
                <td scope="row"><a class="btn btn-success" href="{{route ('post.show', $post->id) }}" role="button">Ver</a>
                    <a class="btn btn-info" href="{{route ('post.editar', $post->id)}}"> Editar </a>
                </td>
                @endforeach
            </tbody>
        </table>

        @if (session('message'))
        <div>{{session('message')}}</div>
        <!--mensagem temporária de informação-->

        @endif

        {{ $posts->links()}}
    </div>
</body>

</html>

<!--Utilizado o helper route para que possamos direcionar para a rota que nomeamos como posts.create, pois asssim, caso alteremos o url do create, ele automaticamente ira alterar no projeto todo
