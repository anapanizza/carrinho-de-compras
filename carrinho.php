<?php
  //avisando o PHP que vamos trabalhar com sessoes
  session_start();

  if(!isset($_session['carrinho'])){
      $_session['carrinho'] = array();
  }

  //adicionando ao carrinho
  if(isset($_GET['adicionar'])) {
      $temp = array("produto" => "Celular Motorola",
                    "preco" => 1000.00,
                    "quantidade" => 1,
                    "total" => 1000.00);
      $_SESSION['carrinho'][] = $temp;
    }

    //referenciando a variavel de "sessao carrinho"
    //na variavel local "carrinho".
    $carrinho = $_SESSION['carrinho'];

    //obtendo a quantidade de produtos que estao no carrinho
    //usando a funçao count
    $total_produtos = count($carrinho);
?>
<!doctype html>
<html>
<head>
     <meta charset="utf-8"/>
     <title> Carrinho de comprar </title>
     <link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <div id="corpo">
      <h1> Produtos no Carrinho</h1>
      <table>
         <thead>
           <tr>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Preço</th>
              <th>Total</th>
            </th>
        </thead>
        <tbody>
            <!-- Percorrendo o array de produtos com a 
                   estrutura for !-->
            <?php for($i=0; $i<=$total_produtos; $i++): ?>
            <tr>
                <td><?= $carrinho[$i]['produto'] ?></td>
                <td><?= $carrinho[$i]['qnt'] ?></td>
                <td><?= $carrinho[$i]['preco'] ?></td>
                <td><?= $carrinho[$i]['total'] ?></td>
            <tr>
            <?php endfor; ?>
        <tbody>
        </table>
  </div>
</body>
</html>