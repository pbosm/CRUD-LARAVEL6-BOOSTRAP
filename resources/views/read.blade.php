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
            <h1>Produto {{$produto->nome}} cadastrado!</h1>
            <table class="table table-borderless">
            <thead>
            <tr>
            <th scope="col">Nome do produto</th>
            <th scope="col">Valor do produto</th>
            <th scope="col">Estoque</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <th scope='row'>{{$produto->nome}}</th>
                <td>{{$produto->valor}}</td>
                <td>{{$produto->estoque}}</td>
                <!-- <td width=280px><a href='viewupdate?id=$id' class='btn btn-success btn-sm'>Editar</a>
                <a width=280px><a href='delete.php?id=$id&nome=$nome' class='btn btn-danger btn-sm'>Excluir</a> -->
                </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>