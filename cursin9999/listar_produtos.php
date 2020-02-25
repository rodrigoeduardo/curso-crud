<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/a69a9b8465.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-top: 40px">
        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-primary">Voltar!</a>
        </div>
        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Número do Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>

                    <th scope="col">Ação</th>
                </tr>
            </thead>



            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array['ID_ESTOQUE'];
                $nroproduto = $array['NROPRODUTO'];
                $nomeproduto = $array['NOMEPRODUTO'];
                $categoria = $array['CATEGORIA'];
                $quantidade = $array['QUANTIDADE'];
                $fornecedor = $array['FORNECEDOR'];
            ?>
                <tr>

                    <td><?php echo $nroproduto ?></td>
                    <td><?php echo $nomeproduto ?></td>
                    <td><?php echo $categoria ?></td>
                    <td><?php echo $quantidade ?></td>
                    <td><?php echo $fornecedor ?></td>
                    <td><a class="btn btn-warning" href="editar_produto.php?id=<?php echo $id_estoque ?>" style="color: white" role="button"><i class="far fa-edit"></i> Editar</a>
                        <a class="btn btn-danger" href="deletar_produto.php?id=<?php echo $id_estoque ?>" style="color: white" role="button"><i class="far fa-trash-alt"></i> Excluir</a>

                    </td>


                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>