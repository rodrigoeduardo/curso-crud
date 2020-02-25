<?php
include 'conexao.php';

$novofornecedor = $_POST['novofornecedor'];

$sql = "INSERT INTO `FORNECEDOR`(`FORNECEDOR`) VALUES ('$novofornecedor')";

$inserir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container" style="width: 500px">
    <div style="padding-top: 20px">
    <h4>Fornecedor adicionado!</h4>
    </div>
    <div style="padding-top: 20px; text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar!</a>
        <a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-success">Cadastrar novo fornecedor</a>
    </div>
</div>