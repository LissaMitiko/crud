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


    <!--Exibir a lista de erros seguindo as regras estabelecidas no request -->


    <form action="{{ route('post.store')}}" method="POST">
        @csrf

        <div class="create">
            <div id="create">
                <h1>Crie sua postagem</h1>
                <div class="col-md-12">
                    <label class="form-label">Título:</label>
                    <br>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título"
                        value="{{ old ('titulo') }} ">
                    <!-- criamos um "armazenamento"  de maneira temporaria com os valores do formulário-->
                    <br>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Autor:</label>
                    <br>
                    <input type="text" class="form-control" name="autor" id="autor" placeholder="Nome do autor"
                        value="{{ old ('autor') }} ">
                    <br>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Conteúdo:</label>
                    <br>
                    <textarea name="conteudo" class="form-control" id="conteudo" cols="30"
                        rows="10"> {{ old ('conteudo') }}</textarea>
                    <br>
                </div>
                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error )
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
                @endif
                <div class="d-grid gap-2">
                    <button class="btn btn-success" type="submit">Enviar</button>
                    <a class="btn btn-warning" href="{{route('post.home')}}">Cancelar</a></button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
