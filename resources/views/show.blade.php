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

    <div class="container-show">
        <div id="container-show">
            <h1>Postagem</h1>
            <hr>
            <form>
                <h3>{{ $post->titulo}}</h3>
                <h4>Por: {{ $post->autor }}</h4>
                <br>
                <textarea name="conteudo" class="form-control" id="conteudo" cols="30" rows="10"
                    disabled> {{ $post->conteudo }}</textarea>
                </ul>
            </form>
            <br>
            <form action="{{route('post.destroy', $post->id)}}" method="POST">
                @csrf
                <div class="d-grid gap-2">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Deletar postagem</button>

                <a class="btn btn-warning" href="{{route('post.home')}}">Cancelar</a></button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
