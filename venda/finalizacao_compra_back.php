<?php
    include "../utils/conexao.php"; 

    function validarProdutos($conecta, $resultado_lista)
    {
        // Realizar as validações com os produtos aqui
        foreach($resultado_lista as $linha)
        {
            $sql = "SELECT estoque FROM caricactoProduto WHERE id_produto = ".$linha['id_produto']."";
            $res = pg_query($conecta,$sql);

            $resulta = pg_fetch_array($res);

            if($linha['qtde'] > $resulta['estoque'] || $resulta['estoque'] <= 0){
                $qtdeEstoque = $resulta['estoque'];

                $sqlCarrinho = "UPDATE carrinho
                                    SET qtde = $qtdeEstoque
                                    WHERE id_produto = ".$linha['id_produto'].";";

                pg_query($conecta, $sqlCarrinho);

                echo '<script type="text/javascript">';
                echo "alert('Não possuimos a quantidade desejada em estoque.')";
                echo '</script>';

                echo '<script type="text/javascript">';
                echo "alert('Colocamos a quantidade do estoque em seu carrinho!')";
                echo '</script>';

                // header("location:carrinho_front.php");

                echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=carrinho_front.php'>";
                
                return FALSE;
            }
        }

        return TRUE;
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

    $val = TRUE;

    foreach($resultado_lista as $linha)
    { 
      $val = $val && validarProdutos($conecta, $resultado_lista);
    }

    if($val)
    {
        $sql = "INSERT INTO venda (id_usuario, datahoravenda, observacoes) VALUES ($idusuario, current_timestamp, 'Venda realizada');";
        $res = pg_query($conecta, $sql);
        $qtdLinhas = pg_affected_rows($res);

        if ($qtdLinhas == 0)
            echo "<div class='text-conf-compra'>
                        <h1>Erro ao Finalizar a Compra!!!</h1>
                    </div>";

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
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>