<main>

    <section class="mt-3">
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Excluir Vaga</h2>

    <form method="POST">

        <div class="form-group mt-3">
            <p>Você realmente deseja excluir a vaga <strong><?=$obVaga->titulo?></strong>?</p>
        </div>

        <div class="form-group mt-3">
            <a href="index.php"><button type="button" class="btn btn-success">Cancelar</button></a>
            &nbsp;
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>

    </form>

</main>