<?php
  include "../utils/conexao.php";

  $sql="SELECT v.*,
            iv.qtde,
            iv.valorUnitario,
            iv.valorTotal
        FROM itemVenda iv 
        INNER JOIN venda v 
        on v.id_usuario = $id_usuario";

  $resultado = pg_query($conecta, $sql);
  $qtde = pg_num_rows($resultado);

  $resultado_lista = null;

  if ($qtde > 0)
  {
    $resultado_lista=pg_fetch_all($resultado);
  }

  pg_close($conecta);
?>