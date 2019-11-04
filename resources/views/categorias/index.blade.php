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
                <th style="display:flex;">
                    <a href="/categoria/{{ $categoria->id }}/edit" class="button is-warning">
                        Editar
                    </a>

                    <form action="{{ url("/categoria", ['id' => $categoria->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <input style="margin-left:5px;" class="button is-danger" type="submit" value="Delete" />
                    </form>

                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/categoria/create" class="button is-primary">Nova</a>
</div>
@endsection
