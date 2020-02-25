<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE ID_ESTOQUE = $id";
$deletar = mysqli_query($conexao,$sql);


?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; margin-top: 20px">
    <center>
        <h3>Excluído!</h3>
        <div style="margin-top: 20px">
            <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: white">Voltar</a>
        </div>
    </center>
</div>