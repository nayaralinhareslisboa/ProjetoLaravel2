@extends('layouts.app')
@section('venda.cadastro')
<h1>Cadastro de Venda</h1>
<form method="post" action="{{ route('venda.novo')}}">
    @csrf
    <select class="form-control" name="id_usuario" id="">
        @foreach($usuarios as $u)
        <option value="{{ $u->id}}"> {{$u->nome}} </option>
        @endforeach
    </select>
    <input type="number" class="form-control" name="valor" paceholder="Valor">
    <input type="submit" class="btn btn-success" valor="Enviar">

</form>
@endsection


