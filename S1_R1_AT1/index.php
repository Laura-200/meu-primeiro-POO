<?php
require_once 'Produto.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $c1 = new Produto($_POST['nome'], $_POST['preco']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro  Produtos</title>
</head>
<body>
    <center>
    <h1>Cadastre o Produto</h1>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id=""><br>

        <label for="preco">Preço: </label>
        <input type="number" name="preco" id=""><br>

        <input type="submit" value="Cadastrar">


    </form>
    <?php
    if(isset($c1)){
        $c1->mostraProduto();
    }
    ?>
    </center>
</body>
</html>