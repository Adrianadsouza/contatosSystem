@extends('layouts.app')
@section('content')
<br>
<a href="/contato/add" class="btn btn-primary btn-lg" role="button" aria-pressed="true" style="float: right; margin-right: 20px">Novo Contato</a>
<br>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($contatos as $dados) {
            ?>
            <tr>
                <th scope="row">{{$dados->id}}</th>
                <td>{{$dados->nome}}</td>
                <td>{{$dados->email}}</td>
                <td>{{$dados->telefone}}</td>
                <td>{{$dados->endereco}}</td>
                <td>
                    <a href="/contato/edit/{{$dados->id}}" class="btn btn-primary" role="button" aria-pressed="true" style="">Alterar</a>
                    <a href="/contato/delete/{{$dados->id}}" class="btn btn-danger" onclick="return confirm('Deseja Excluir o Contato?')" role="button" aria-pressed="true" style="">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

@endsection