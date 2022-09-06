<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos laravel e boostrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col">
                <form action="/update/{{$produto->id}}" method="POST">
                    @csrf
                    <legend>CRUD 3</legend>
                    <div class="mb-3">
                        <input type="text" name="nome" placeholder="Nome do produto" class="form-control" value="{{$produto->nome}}">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="valor" placeholder="Valor do produto" class="form-control" value="{{$produto->valor}}">
                    </div>
                    <div class="mb-3">
                        <input type="number" name="estoque" placeholder="Estoque do produto" class="form-control" value="{{$produto->estoque}}">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>