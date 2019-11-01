@extends ('layout')

@section ('conteudo')
<div id="page" class="container">
    <h1 class="title is-3" style="margin-top:50px;">Enviar Video</h1>
    <div class="container">
        <form action="/video" method="POST">
            @csrf
            <label for="video_nome" class="label">Nome:</label>
            <input id="video_nome_id" type="text" name="video_nome" class="input">

            <div class="field">
                <div class="control">
                    <label for="video_categoria" class="label">Categoria:</label>
                    <div class="select is-success">
                        <select name="video_categoria">
                            <option value="0">Escolha...</option>
                            <option value="1">Comédia</option>
                            <option value="2">Drama</option>
                            <option value="3">Ação</option>
                            <option value="4">Esporte</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="file has-name">
                <label class="file-label">
                    <input class="file-input" type="file" name="video_arquivo">
                    <span class="file-cta">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Choose a file…
                        </span>
                    </span>
                    <span class="file-name">
                        Nome do video aqui
                    </span>
                </label>
            </div>
            <br>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-success">Submit</button>
                </div>
                <div class="control">
                    <button class="button is-success is-light">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
