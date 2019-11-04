@extends('layout')

@section('conteudo')
<div class="container">
    <form action="/categoria/{{ $categoria->id }}" method="post">
        @method('put')
        @csrf
        <label for="categoria_nome" class="label">Nome:</label>
        <input type="text" name="nome" id="categoria_nome" class="input" value="{{ $categoria->nome }}">
        <label for="categoria_slug" class="label">Slug:</label>
        <input type="text" name="slug" id="categoria_slug" class="input" value="{{ $categoria->slug }}">
        <div class="botoes" style="margin-top:10px;">
            <button type="submit" class="button is-primary">Enviar</button>
            <a href="/categoria" class="button">Cancelar</a>
        </div>
    </form>
</div>
@endsection
