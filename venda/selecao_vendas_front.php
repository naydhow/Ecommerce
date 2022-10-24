<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Vendas REALIZADAS</title>
</head>
<body>
<?php
    include_once "../utils/header_3.php";

    session_start();
    if($_SESSION['usuariologado']) {
    $id_usuario = $_SESSION['usuariologado']['id_usuario'];

    include "selecao_vendas_back.php";
 ?>
  <main>
    <div class="container_paginas">
      <div class="section">
        <div class="table_venda">
          <?php
            if($resultado_lista != null)
            {
              foreach($results as $line)
              {
                echo "<div class='division_venda'>";
                echo "<div class='resumo_venda'>";
                echo "<span>".$line['observacoes']." #".$line['id_venda']."</span>";
                echo "<div class='op'>";
                echo "<span>".date('d/m/Y', strtotime($line['datahoravenda']))."</span>";
                echo "<div class='opcoes'><b>Mais Opções</b></div>";
                echo "</div>";
                echo "</div>";
                echo "<div class='item_venda'>";
                foreach($resultado_lista as $linha)
                { 
                  // echo date('d/m/Y', strtotime($linha['datahoravenda']));echo "<br>";
                  if($linha['id_venda'] == $line['id_venda'])
                  {
                    echo "<div class='propriety_venda'>";
                    echo "<span>ID produto - ".$linha['id_produto']."</span>";
                    echo "<span>Quantidade no carrinho - ".$linha['qtde']."</span>";
                    echo "<span>Valor por unidade - ".$linha['valorunitario']."</span>";
                    echo "<span>Valor pela quantidade de produto - ".$linha['subtotal']."</span>";
                    echo "</div>";
                  }
                }
                echo "</div>";
                echo "</div>";
              }
              
            }
            else
            {
              echo "<div>";
              echo "  <div class='section_none'>";
              echo "      <span><b>Você ainda não realizou nenhuma compra! :[</b></span>";
              echo "  </div>";
              echo "</div>";
            }
          ?>
        </div>
      </div>
    </div>
  </main>

  <?php
    }
    else
    {
      echo "<div>";
			echo "  <div class='section_none'>";
			echo "      <span>Você não possui permissão para acessar este local.</span>";
			echo "      <span><b>Faça o login para acessar essa função.</b></span>";
			echo "  </div>";
			echo "</div>";
    }

    include_once "../utils/footer_3.php";
  ?>

  <script src="../js/main.js"></script>
</body>
</html>