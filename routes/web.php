<?php

use App\Produto; //IMPORT
use Illuminate\Http\Request;

//Index - Pagina inicial - cadastro produto
Route::get('/', function () {
    return view('index');
});

//CREATE - Rota de criação do produto
Route::post('/create', function (Request $request) {
    Produto::create([
        'nome'    => $request->nome,
        'valor'   => $request->valor,
        'estoque' => $request->estoque
    ]);
    echo "Produto Cadastrado com sucesso!!!!
    <a class='btn btn-primary' href='index.php' role='button'>Ver todos os cadastros!!!</a>";
});

//Read - ver todos os produtos cadastrados, colocando o id na URL
Route::get('/read/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('read', ['produto' => $produto]);
});

//UPDATE - atualizando determinado produto pelo id 
Route::get('/update/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('update', ['produto' => $produto]);
});

//UPDATE - salvando os dados no bd
Route::post('/update/{id}', function (Request $request, $id) {
    $produto = Produto::find($id);
    $produto->update([
        'nome'    => $request->nome,
        'valor'   => $request->valor,
        'estoque' => $request->estoque
    ]);
    echo "Produto alterado com sucesso!!!!";
});

//DELETE - exluindo um produto no BD atráves do id passado na URL
Route::get('/delete/{id}', function ($id) {
    $produto = Produto::find($id);
    $produto->delete();
    echo "Produto excluido com sucesso!!!!";
});
