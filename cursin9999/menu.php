<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="index.php" style="text-decoration: none">
        <div style="color: white">
            <h5>Site do Rodrigo Topss</h5>
            </div>
        </a>
        <br><br>
    </nav>
    <br>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar produtos</h5>
                        <p class="card-text">Número, Nome, Quantidade, Categoria, Fornecedor.</p>
                        <a href="adicionar_produto.php" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Listar produtos</h5>
                        <p class="card-text">Lista de produtos com possibilidade de edição e exclusão.</p>
                        <a href="listar_produtos.php" class="btn btn-primary">Listar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar e/ou excluir categoria</h5>
                        <p class="card-text">Nova categoria para adicionar os produtos ou excluir.</p>
                        <a href="adicionar_categoria.php" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 30px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar e/ou excluir fornecedor</h5>
                        <p class="card-text">Novo fornecedor para adicionar os produtos ou excluir.</p>
                        <a href="adicionar_fornecedor.php" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>