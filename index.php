<?php

require_once __DIR__."/vendor/autoload.php";

use \App\Entitys\Vaga;

$vagas = Vaga::getVagas();


require_once __DIR__."/includes/header.php";
require_once __DIR__."/includes/listagem.php";
require_once __DIR__."/includes/footer.php";
