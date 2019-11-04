@extends ('layout')

@section ('conteudo')
<div id="page" class="container">
    <h1 class="title is-3" style="margin-top:50px;">Enviar Video</h1>
    <div class="container">
        <form action="/video/{{ $video->id }}" method="POST">
            @method('put')
            @csrf
            <label for="video_nome" class="label">Nome:</label>
            <input id="video_nome_id" type="text" name="video_nome" class="input is-success" value="{{$video->nome}}">
            <label for="link" class="label">Link:</label>
            <input type="text" name="video_link" id="link" class="input is-success is-light" value="{{$video->link}}">
            <div class="field">
                <div class="control">
                    <label for="video_categoria" class="label">Categoria:</label>
                    <div class="select is-success">
                        <select name="video_categoria">
                            <option value="0">Escolha...</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}"
                                <?php if($categoria->id === $video->categoria_id) echo 'selected';?>>
                                {{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <textarea class="textarea is-success" placeholder="Descrição" name="descricao">
                {{ $video->descricao }}
            </textarea>
            <br>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-success">Enviar</button>
                </div>
                <div class="control">
                    <a href="/video" class="button is-success is-light">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
