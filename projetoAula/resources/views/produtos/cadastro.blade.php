@extends('layouts.app')
@section('cadastro')
<div class="container mt-5">
    <div class="row row-cols-1">
        <div class="col mx-3">
            <h1 class="text-center">Cadastro de Produto</h1>
        </div>
        <div class="col col-lg-6 mx-auto table-responsive">
            <form class="row row-cols-1" method="post" action="{{ route('produtos.novo')}}">
            @csrf
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                    <label for="nome">Nome</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="tipo" required>
                    <label for="tipo">Tipo</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="preco" name="preco" placeholder="preco" required>
                    <label for="preco">Preço</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="quantidade" required>
                    <label for="quantidade">Quantidade</label>
                </div>
            </div>
                <button class="btn btn-success" type="submit">Salvar</button>
            </form> 
        </div>
    </div>
</div>
@endsection