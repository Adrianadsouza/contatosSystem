@extends('layouts.app')
@section('content')
<form style="margin-left: 50px; margin-right: 50px" method="get" action="add">
    <br>
    @if ($sucesso)
    <div class="alert alert-success" role="alert">
        Cadastro realizado com sucesso!
    </div>
    @endif
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Digite seu E-mail">
    </div>


    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="emailHelp" placeholder="Digite seu Telefone">
    </div>


    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco" aria-describedby="emailHelp" placeholder="Digite seu Endereco">
    </div>


    <button type="submit" class="btn btn-primary">Cadastar</button>
    <a href="/contato/list" class="btn btn-primary" role="button" aria-pressed="true" style="">Listagem</a>
</form>


@endsection