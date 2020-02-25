<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
            margin-top: 40px;
        }

        #botao {
            background-color: #433894;
            color: #ffffff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container" id="tamanhoContainer">
        <h4>Formulário de Cadastro</h4>
        <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
            <div class="form-group">
                <label>Número de Produto</label>
                <input required type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto...">
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input required type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto...">
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input required type="number" class="form-control" name="qntd" placeholder="Insira a quantidade...">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select required class="form-control" name="categoria">

                    <?php

                    include 'conexao.php';
                    $sql = "SELECT * FROM CATEGORIA order by categoria ASC";
                    $buscar = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        $id_categoria = $array['ID_CATEGORIA'];
                        $nome_categoria = $array['CATEGORIA'];

                    ?>

                        <option><?php echo $nome_categoria ?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select required class="form-control" name="fornecedor">
                    <<?php

                        include 'conexao.php';
                        $sql2 = "SELECT * FROM fornecedor order by fornecedor ASC";
                        $buscar = mysqli_query($conexao, $sql2);
                        while ($array2 = mysqli_fetch_array($buscar)) {
                            $id_fornecedor = $array2['ID_FORNECEDOR'];
                            $nome_fornecedor = $array2['FORNECEDOR'];

                        ?> <option><?php echo $nome_fornecedor ?></option>

                    <?php } ?>
                </select>
            </div>
            <div style="text-align: right">
                <a href="index.php" role="button" class="btn btn-primary">Voltar!</a>
                <button type="submit" id="botao" class="btn">Cadastrar!</button>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>