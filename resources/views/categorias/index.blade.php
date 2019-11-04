@extends('layout')
@section('conteudo')
<div class="container">
    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
            <th>{{ $categoria->nome }}</th>
                <th></th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/categoria/create" class="button is-primary">Nova</a>
</div>
@endsection