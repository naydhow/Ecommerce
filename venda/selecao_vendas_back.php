<?php
  include "../utils/conexao.php";

  // $sql2="SELECT datahoraVenda
  //         FROM venda
  //       WHERE id_usuario = $id_usuario";

  // $resultado2 = pg_query($conecta, $sql2);

  $sql="SELECT v.*,
            iv.qtde,
            iv.valorUnitario,
            iv.valorTotal
          FROM itemVenda iv 
          INNER JOIN venda v 
            on v.id_venda = iv.id_venda
          WHERE v.id_usuario = $id_usuario";

  $resultado = pg_query($conecta, $sql);
  $qtde = pg_num_rows($resultado);

  $resultado_lista = null;

  if ($qtde > 0)
  {
    $resultado_lista=pg_fetch_all($resultado);
    $results=pg_fetch_all($resultado2);
  }

  pg_close($conecta);
?>