<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Fornecedor</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/a69a9b8465.js" crossorigin="anonymous"></script>
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
        <h4>Cadastro de Fornecedor</h4>
        <form action="_inserir_novo_fornecedor.php" method="post" style="margin-top: 20px">
            <div class="form-group">
                <label>Novo forcenedor</label>
                <input required type="text" class="form-control" name="novofornecedor" placeholder="Insira o nome do novo fornecedor...">
            </div>
            <div style="text-align: right">
                <a href="index.php" role="button" class="btn btn-primary">Voltar!</a>
                <button type="submit" id="botao" class="btn">Adicionar!</button>
            </div>
        </form>
    </div>

    <div class="container" style="margin-top: 40px; margin-bottom: 40px">
        <h3>Lista de Fornecedores</h3>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID do Fornecedor</th>
                    <th scope="col">Nome do Fornecedor</th>

                    <th scope="col">Ação</th>
                </tr>
            </thead>



            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `fornecedor`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_fornecedor = $array['ID_FORNECEDOR'];
                $fornecedor = $array['FORNECEDOR'];
            ?>
                <tr>

                    <td><?php echo $id_fornecedor ?></td>
                    <td><?php echo $fornecedor ?></td>
                    <td>
                        <a class="btn btn-danger" href="deletar_fornecedor.php?id=<?php echo $id_fornecedor ?>" style="color: white" role="button"><i class="far fa-trash-alt"></i> Excluir</a>

                    </td>


                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>