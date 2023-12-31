@extends('layouts.app')
@section('conteudo')
<div class="container mt-5">
    <div class="row row-cols-1">
        <div class="col mb-3">
            <h1 class="text-center">Lista de Usuários</h1>
        </div>
        <div class="col mb-3">
            <div class="d-grid gap-2 d-lg-flex justify-content-lg-end">
                <a class="btn btn-primary" href="{{ route('usuarios.cadastro')}}"> Cadastrar Novo Usuário</a>
            
                <a class="btn btn-primary" href="{{ route('produtos.index')}}"> Listar Produtos</a>
            </div>
        </div>
        <div class="col mb-3 table-responsive">
            <table class="table table-striped align-middle text-center"> 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->login }}</td>
                        <td>{{ $usuario->senha }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{
                            route('usuario.atualiza', ['id' => $usuario->id]) }}">Alterar</a>
                            <a class="btn btn-danger" href="#" onclick="exclui({{ $usuario->id }})">Excluir</a> 
                            <a class="btn btn-success" href=" {{ route('venda.usuario',['id'=>$usuario->id]) }} ">Vendas</a> 
                        </td> 
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function exclui(id) {
        if (confirm('Deseja excluir o usuário de id: ' + id + '?')) {
            location.href = '/usuario/excluir/' + id;
        }
    }
</script>
@endsection