@extends ('layout')

@section ('conteudo')
<table class="table">
    <thead>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Categoria</th>
    </thead>
    <tbody>
        @foreach($videos as $video)
        <tr>
            <th><?=$video->nome;?></th>
            <th><?=$video->descricao;?></th>
            <th><?=$video->categoria_id;?></th>
        </tr>
        @endforeach
    </tbody>
</table>

<a class="button is-dark" href="/video/novo">Novo</a>
@endsection
