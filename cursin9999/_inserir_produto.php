<?php
include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$qntd = $_POST['qntd'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`NROPRODUTO`, `NOMEPRODUTO`, `CATEGORIA`, `QUANTIDADE`, `FORNECEDOR`) VALUES ($nroproduto,'$nomeproduto','$categoria',$qntd,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container" style="width: 500px">
    <div style="padding-top: 20px">
    <h4>Produto adicionado!</h4>
    </div>
    <div style="padding-top: 20px; text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar!</a>
        <a href="adicionar_produto.php" role="button" class="btn btn-sm btn-success">Cadastrar novo item</a>
    </div>
</div>