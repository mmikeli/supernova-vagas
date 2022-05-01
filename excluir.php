<?php

date_default_timezone_set('America/Sao_Paulo');

require_once __DIR__."/vendor/autoload.php";

use \App\Entitys\Vaga;

if(!isset($_GET['i']) || empty($_GET['i']) || !is_numeric($_GET['i']))
{
    header("Location: index.php?status=error");
    exit;
}

$obVaga = Vaga::getSingleVaga($_GET['i']);
if(!$obVaga instanceof Vaga)
{
    header("Location: index.php?status=error");
    exit;
}

if(isset($_POST['excluir']))
{
    
    $obVaga->excluir();

    header("location: index.php?status=success");
    exit;
}

include __DIR__."/includes/header.php";
include __DIR__."/includes/confirmar-excluir.php";
include __DIR__."/includes/footer.php";
