<?php

include 'conexao.php';

$id = $_POST['id'];

$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `NOMEPRODUTO`='$nomeproduto',`CATEGORIA`='$categoria',`QUANTIDADE`=$quantidade,`FORNECEDOR`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 400px; margin-top: 20px">
    <center>
        <h3>Atualizado!</h3>
        <div style="margin-top: 20px">
            <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: white">Voltar</a>
        </div>
    </center>
</div>