<?php
  include "../utils/conexao.php";

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "SELECT email, senha FROM caricactoUsuario WHERE email = '$email'";

  $resultado=pg_query($conecta,$sql);
  $qtde=pg_num_rows($resultado);

  if ( $qtde == 0 )
  {
      echo '<script language="javascript">';
      echo "alert('Usuário não encontrado!')";
      echo '</script>';
      echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login.html'>";
      exit;
  }

  $linha = pg_fetch_array($resultado);

  if($senha == $linha['senha'])
  {
    echo '<script language="javascript">';
    echo "alert('Você está logado!')";
    echo '</script>';
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../index.php'>";
    exit;	
  }
  else
  {
    echo '<script language="javascript">';
    echo "alert('Usuário ou senha estão incorretos!')";
    echo '</script>';
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login.html'>";
    exit;	
  }
?>