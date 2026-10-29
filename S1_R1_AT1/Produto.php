<!-- fazendo uma estilizaçãozinha  -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            background-color: #ffeef2;
            color: #ff69b4;
            font-family: serif;
            text-align: center;
            margin-top: 40px;
        }

        h1 {
            color: #ff69b4;
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

<?php
// criando a classe Cliente
class Produto{

    //atributos:
    public $nome;
    public $preco;

    //metodos:
    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;

    }
    public function cadastrar(){
        echo "/n Produto: {this->nome} Cadastrado com sucesso!\n";
    }
    public function mostraProduto(){
        echo "Nome: ". $this->nome . "<br>";
        echo "Preço: ". $this->preco . "<br>";
    }
}


// aqui estou Instanciando dois produtos diferentes. vou deixar comitado para não aparecer no front
// $p1 = new Produto("Batom", 10.0);
// $p1->mostraProduto();

// $p2 = new Produto("Blush", 15.0);
// $p2->mostraProduto();

?>