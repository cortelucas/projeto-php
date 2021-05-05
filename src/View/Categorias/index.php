<?php require '../src/View/cabecalho.php'?>

    <h1 class="display-4 mt-5">Categorias</h1>

<?php

    while ($c = $resultado->fetch(PDO::FETCH_ASSOC)){
        echo "Descricao: {$c['descricao']}";
    }

?>

<?php require '../src/View/rodape.php'?>