@extends ('layout')

@section ('conteudo')
<div class="container">
    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Categoria</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach($videos as $video)
            <tr>
                <th>{{ $video->nome }}</th>
                <th>{{ $video->descricao }}</th>
                <th>{{ $categorias[$video->categoria_id - 1]->nome }}</th>
                <th style="display:flex;"><a target="_blank" href="{{ $video->link }}" class="button is-link">Assistir</a>

                    <form action="{{ url('/video', ['id' => $video->id])}}" method="post">
                        @method('put')
                        @csrf
                        <input style="margin-left:5px;" type="button" value="Editar" class="button is-warning">
                    </form>
                
                    <form action="{{ url("/video", ['id' => $video->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <input style="margin-left:5px;" class="button is-danger" type="submit" value="Delete" />
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="button is-primary" href="/video/create">Novo</a>
</div>
@endsection
