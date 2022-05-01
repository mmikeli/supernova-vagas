<?php

$mensagem = '';
if(isset($_GET['status']))
{
    switch ($_GET['status']) {
        case 'success':
            $mensagem = "<div class='mt-3 alert alert-success'>Ação Executada com Sucesso!</div>";
            break;
            
        case 'error':
            $mensagem = "<div class='mt-3 alert alert-danger'>Ação Não Pôde ser Executada!</div>";
            break;
    }
}

$resultados = '';
foreach($vagas as $vaga)
{
    $resultados .= "<tr>";
    $resultados .= "<td>".$vaga->id."</td>";
    $resultados .= "<td>".$vaga->titulo."</td>";
    $resultados .= "<td>".$vaga->descricao."</td>";
    $resultados .= "<td>".($vaga->ativo == 's' ? 'Ativo' : 'Inativo')."</td>";
    $resultados .= "<td>".date('d/m/Y à\s H:i:s', strtotime($vaga->data))."</td>";
    $resultados .= "<td>";
    $resultados .= "<a href='editar.php?i=".$vaga->id."'>";
    $resultados .= "<button type='button' class='btn btn-primary'>Editar</button>";
    $resultados .= "</a>";
    $resultados .= "&nbsp";
    $resultados .= "<a href='excluir.php?i=".$vaga->id."'>";
    $resultados .= "<button type='button' class='btn btn-danger'>Excluir</button>";
    $resultados .= "</a>";
    $resultados .= "</td>";
    $resultados .= "</tr>";
}

    $resultados = strlen($resultados) ? $resultados : "<tr><td colspan='6' class='text-center'><p>Nenhuma vaga encontrada.</p></td></tr>";

?>

<main>

    <?=$mensagem?>

    <section class="mt-3">
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Vaga</button>
        </a>
    </section>
    <section>
        <table class="table bg-light mt-3">
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
               <?=$resultados?>
            </tbody>

        </table>
    </section>
</main>