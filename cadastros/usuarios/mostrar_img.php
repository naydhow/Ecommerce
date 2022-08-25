<?php

  $id_imagem = $_GET['id_usuario'];
  $sqlimg = "SELECT id_usuario, img FROM caricactoUsuario2 WHERE id_usuario = $id_imagem";
  $resultado = pg_query($conecta,$sqlimg);
  $imagem = pg_fetch_object($resultado);
  Header( "Content-type: image/gif");
  echo $imagem->imagem;
  
?>