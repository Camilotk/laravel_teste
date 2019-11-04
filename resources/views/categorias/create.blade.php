@extends('layout')

@section('conteudo')
<div class="container">
<form action="/categoria" method="post">
    @csrf
    <label for="categoria_nome" class="label">Nome:</label>
    <input type="text" name="nome" id="categoria_nome" class="input">
    <label for="categoria_slug" class="label">Slug:</label>
    <input type="text" name="slug" id="categoria_slug" class="input">
    <div class="botoes" style="margin-top:10px;">
    <button type="submit" class="button is-primary">Enviar</button>
    <a href="/categoria" class="button">Cancelar</a>
    </div>
</form>
</div>    
@endsection