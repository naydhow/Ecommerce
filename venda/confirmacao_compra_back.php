<?php
    include "../utils/conexao.php"; 

    /* seleciona todos os itens do carrinho do usuário */
    $sql="SELECT c.*,
                 p.preco,
                 c.estoque * p.preco as subtotal,
                 p.descricao,
                 p.estoque
            FROM carrinho c
           inner join caricactoProduto p
              on c.id_produto = p.id_produto
           WHERE c.id_usuario = $idusuario
           ORDER BY p.descricao;";

    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);

    session_start();
    $_SESSION['produtos'] = $resultado_lista;
?>