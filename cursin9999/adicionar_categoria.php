<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Categoria</title>
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
        <h4>Cadastro de Categoria</h4>
        <form action="_inserir_nova_categoria.php" method="post" style="margin-top: 20px">
            <div class="form-group">
                <label>Nova categoria</label>
                <input required type="text" class="form-control" name="novacategoria" placeholder="Insira o nome da nova categoria...">
            </div>
            <div style="text-align: right">
                <a href="index.php" role="button" class="btn btn-primary">Voltar!</a>
                <button type="submit" id="botao" class="btn">Adicionar!</button>
            </div>
        </form>
    </div>
    <div class="container" style="margin-top: 40px; margin-bottom: 40px">
        <h3>Lista de Categorias</h3>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID da Categoria</th>
                    <th scope="col">Nome da Categoria</th>

                    <th scope="col">Ação</th>
                </tr>
            </thead>



            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_categoria = $array['ID_CATEGORIA'];
                $categoria = $array['CATEGORIA'];
            ?>
                <tr>

                    <td><?php echo $id_categoria ?></td>
                    <td><?php echo $categoria ?></td>
                    <td>
                        <a class="btn btn-danger" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" style="color: white" role="button"><i class="far fa-trash-alt"></i> Excluir</a>

                    </td>


                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>