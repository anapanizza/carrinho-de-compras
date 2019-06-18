<?php
session_start(); // avisando o php que essa pagina trabalha com sessoes.

/**
 * verifico se a variavel de acoes existe, para entao verificar qual acao o usuario ordenou.
 */
if(isset($_GET['acao_carrinho'])) {

    switch($_GET['acao_carrinho']) {

      case 'limpar': // na URL do navegador: carrinho_acoes.php?acao_carrinho=limpar
         $_SESSION['carrinho'] = array(); //ao definir o carrinho como array novamente,limpamos ele.
        break;

        case 'add': //adiciona um produto ao carrinho
              //pegando as variaveis da URL com os dados do produto (isso nao é o ideal, apenas didatico)
              $produto = $_GET['carr_produto'];
              $preco = $_GET['carr_preco'];
              $qnt = $_GET['carr_qnt'];
              $total = $preco * $qnt;

              $dados_produtos_a_ser_add = array("produto" => $produto, "preco" => $preco, "quantidade" => $qnt,
                        "total" => $total);
             
              $_SESSION['carinho'][] = $dados_produtos_a_ser_add; //adicionando os dados estruados do produto
        break;

        case 'remover':
             $item_carrinho = $_GET['item'];

            if(isset($_SESSION['carrinho'][$item_carrinho])) { //verificando se o item realmente existe.
                unset($_SESSION['carrinho'][$item_carrinho]); // se existe,destroi o item.
            }       
        break;
    
        case 'atualiza-qnt':
           $item_carrinho = $_GET['item']; //pegando qual item o usuario quer atualizar a qnt.

           if(isset($_SESSION['carrinho'][$item_carrinho])) { //verificando se o item existe...
                $qnt = (int) $_GET['carr_qnt']; //pegandoa quantidade que ele deseja.
                $total = $_SESSION['carrinho'][$item_carrinho]['preco'] * $qnt; //atualizando o total
     
                $_SESSION['carrinho'][$item_carrinho]['quantidade'] = $qnt; //definindo novamente a quantidade.
                $_SESSION['carrinho'][$item_carrinho]['total'] = $total; //definindo o novo total.
            }
        break;
    } //fimn do switch
} //fim do if do isset

?>