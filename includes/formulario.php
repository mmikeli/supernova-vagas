<main>

    <section class="mt-3">
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="POST">

        <div class="form-group mt-3">
            <label for="inputTitle">Título</label>
            <input type="text" id="inputTitle" class="form-control" name="titulo" value="<?=$obVaga->titulo?>">
        </div>

        <div class="form-group mt-3">
            <label for="textDescription">Descrição</label>
            <textarea name="descricao" id="textDescription" class="form-control" rows="5"><?=$obVaga->descricao?></textarea>
        </div>

        <div class="form-group mt-3">
            <label>Status</label>
            <div>
                <div class="form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'n' ? 'checked' : ''?>> Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>