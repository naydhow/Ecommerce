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
    $id_usuario = $_SESSION['usuariologado']['id_usuario'];

    include "selecao_vendas_back.php";
 ?>
  <main>
    <div class="container_paginas">
      <div class="section">
        <?php
          if($resultado_lista != null)
          {
            foreach($resultado_lista as $linha)
            {
              echo $linha['qtde']; echo "<br>";
              echo $linha['valorunitario'];echo "<br>";
              echo $linha['valortotal'];echo "<br>";
              echo date('d/m/Y', strtotime($linha['datahoravenda']));echo "<br>";
              echo $linha['observacoes'];
              echo "<br>";
            }
          }
          else
          {
            echo "Você ainda não realizou nenhuma compra! :[";
          }
        ?>
      </div>
    </div>
  </main>

  <?php
    include_once "../utils/footer_3.php";
  ?>

  <script src="../js/main.js"></script>
</body>
</html>