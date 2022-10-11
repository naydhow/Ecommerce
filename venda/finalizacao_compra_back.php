<?php
    include "../utils/conexao.php"; 

    $compraFinalizada = FALSE;

    function validarProdutos($conecta, $resultado_lista)
    {
        // Realizar as validações com os produtos aqui
        foreach($resultado_lista as $linha)
        {
            $sql = "SELECT estoque FROM caricactoProduto WHERE id_produto = ".$linha['id_produto']."";
            $res = pg_query($conecta,$sql);

            $resulta = pg_fetch_array($res);

            if($linha['qtde'] > $resulta['estoque']){
                // echo '<script language="javascript">';
                // echo "alert('Ih, acabou o estoque meu filho')";
                // echo '</script>';

                echo '<script language="javascript">';
                echo "alert('Não possuimos a quantidade desejada em estoque!')";
                echo '</script>';

                echo '<script language="javascript">';
                echo "alert('Adicionamos a quantidade do estoque ao seu carrinho.')";
                echo '</script>';

                $qtdeEstoque = $resulta['estoque'];

                $sqlCarrinho = "UPDATE carrinho
                                    SET qtde = $qtdeEstoque
                                    WHERE id_produto = ".$linha['id_produto'].";";

                pg_query($conecta, $sqlCarrinho);

                echo "<h1>Deseja continuar?</h1>";
                echo "<a href='finalizacao_compra_front.php'>Finalizar</a>&nbsp;&nbsp;";
                echo "<a href='carrinho_front.php'>Cancelar</a>";
                
                exit;
            }
            return false;
        }

        return true;
    }

    function atualizarEstoque($conecta, $idproduto, $qtdeVendida)
    {
        $sql = "UPDATE caricactoProduto 
                    SET estoque = estoque-$qtdeVendida 
                    WHERE id_produto = $idproduto;";
        
        pg_query($conecta, $sql);
    }

    session_start();
    $resultado_lista = $_SESSION['produtos'];

    // (ainda precisa programar)
    validarProdutos($conecta, $resultado_lista);

    $sql = "INSERT INTO venda (id_usuario, datahoravenda, observacoes) VALUES ($idusuario, current_timestamp, 'Venda realizada');";
    $res = pg_query($conecta, $sql);
    $qtdLinhas = pg_affected_rows($res);

    if ($qtdLinhas == 0)
        echo "<h1>Erro ao Finalizar a Compra!!!</h1>";

    foreach($resultado_lista as $linha)
    { 
        $preco = $linha['preco'];
        $qtde = $linha['qtde'];
        $idproduto = $linha['id_produto'];
        $valortotal += floatval($linha['subtotal']);

        $sql = "INSERT INTO itemVenda (id_venda, id_produto, qtde, valorUnitario, valorTotal) VALUES (currval('venda_id_venda_seq'), $idproduto, $qtde, $preco, $valortotal);";
        $res = pg_query($conecta, $sql);

        atualizarEstoque($conecta, $idproduto, $qtde);
    }  

    // Limpar carrinho
    $sql=" DELETE FROM carrinho
            where id_usuario = $idusuario";

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);


?>