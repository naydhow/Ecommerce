<?php
    include "../utils/conexao.php"; 

    $compraFinalizada = FALSE;

    function validarProdutos($resultado_lista)
    {
        // ESSE CODIGO ESTÁ INCOMPLETO!!!

        // Realizar as validações com os produtos aqui
        foreach($resultado_lista as $linha)
        {
            // $sql = "SELECT qtde FROM carrinho";
            // $res = pg_query($conecta,$sql);
            // if($resultado_lista > $res && ){
            //     echo "Ih, acabou o estoque meu filho";
            // }
            //   return false;
        }

        return true;
    }

    function atualizarEstoque($idproduto, $qtdeVendida)
    {
        // ESSE CODIGO ESTÁ INCOMPLETO!!!

        $sql = "UPDATE carrinho SET qtde = $qtdeVendida WHERE id_produto = $idproduto";
        $res = pg_query($conecta,$sql);
    }

    session_start();
    $resultado_lista = $_SESSION['produtos'];

    // (ainda precisa programar)
    validarProdutos($resultado_lista);

    $sql = "INSERT INTO venda (id_venda, id_usuario, datahoraVenda, observacoes, excluido) VALUES (DEFAULT, $idusuario, SELECT current_timestamp, 'Venda realizada' ,'FALSE');";
    $res = pg_query($conecta, $sql);
    $qtdLinhas = pg_affected_rows($res);

    if ($qtdLinhas == 0)
        echo "<h1>Erro ao Finalizar a Compra!!!</h1>";

    foreach($resultado_lista as $linha)
    { 
        $preco = $linha['preco'];
        $qtde = $linha['qtde'];
        $idproduto = $linha['id_produto'];

        $sql = "INSERT INTO itemVenda (id_venda, id_produto, qtde, valorUnitario, valorTotal) VALUES (CURRVAL('venda_idvenda_seq'),".$idproduto.",".$qtde.",".$preco.",10);";
        $res = pg_query($conecta, $sql);

        // Atualizar qtde estoque 
        // (ainda precisa programar)
        atualizarEstoque($idproduto, $qtde);
    }  

    // Limpar carrinho
    $sql=" DELETE FROM carrinho
            where id_usuario = $idusuario";

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);


?>