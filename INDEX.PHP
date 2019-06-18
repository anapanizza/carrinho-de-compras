<?php
session_start();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Carrinho de Compras </title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="corpo">

        <nav>
        </nav>

        <section id="lista-produtos">
            <div class="item">
                <img src="img/produto1.jpg"/>
                <p> Celular Motorola </p>
                <p> R$1.000,00</p>
                <a href="carrinho_acoes.php?acao_carrinho=add&carr_produto=Celular Motorola&carr_preco=1000&carr_qnt=1">
                      Comprar
                </a>
            </div>
        </section>
    </div>
</body>
</html>