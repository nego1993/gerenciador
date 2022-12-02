    <form action="/salvar-curso<?= isset($curso) ? '?id='. $curso->getId()  : " " ?>" method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="<?= isset($curso) ? $curso->getDescricao() : "" ?>">
        </div>
        <button class="btn btn-outline-success" style="float: right;">Salvar</button>
        <a href="/listar-cursos" class="btn btn-outline-secondary" >Voltar</a>
    </form>
