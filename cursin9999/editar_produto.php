<?php

include 'conexao.php';

$id = $_GET['id'];


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Itens</title>
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
        <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
            <?php
            
            $sql = "SELECT * FROM `estoque` WHERE ID_ESTOQUE = $id";
            $buscar = mysqli_query($conexao,$sql);
            while($array = mysqli_fetch_array($buscar)){

                $id_estoque = $array['ID_ESTOQUE'];
                $nroproduto = $array['NROPRODUTO'];
                $nomeproduto = $array['NOMEPRODUTO'];
                $categoria = $array['CATEGORIA'];
                $quantidade = $array['QUANTIDADE'];
                $fornecedor = $array['FORNECEDOR'];

            ?>
            <div class="form-group">
                <label>Número de Produto</label>
                <input type="number" class="form-control" name="nroproduto" disabled value="<?php echo $nroproduto ?>">
                <input type="number" class="form-control" name="id"value="<?php echo $id ?>" style="display: none">
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
                    <option>Rifles</option>
                    <option>Pistolas</option>
                    <option>Rifles de precisão</option>
                    <option>Espingardas</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
                    <option>Jair Bolsonaro</option>
                    <option>FalleN</option>
                    <option>Lil Pump</option>
                    <option>Coronga</option>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" id="botao" class="btn">Atualizar!</button>
            </div>
            <?php } ?>
        </form>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>