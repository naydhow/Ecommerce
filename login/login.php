<?php
  session_start();
  include "../utils/conexao.php";

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM caricactoUsuario WHERE email = '$email' AND senha = '$senha' AND excluido='false'";

  $resultado=pg_query($conecta,$sql);
  $qtde=pg_num_rows($resultado);

  // if ( $qtde == 0 )
  // {
  //     echo '<script language="javascript">';
  //     echo "alert('Usuário não encontrado!')";
  //     echo '</script>';
  //     echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login.html'>";
  //     exit;
  // }
  if (pg_num_rows($resultado) > 0)
  {
      $linha = pg_fetch_array($resultado);

      $_SESSION["usuariologado"] = $linha;
      $_SESSION["isadm"] = $linha['user_adm'];
      echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../index.php'>";
  }
  else
  {
      echo '<script language="javascript">';
      echo "alert('Usuário ou senha inválidos!')";
      echo '</script>';	

      echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login.html'>";
  }
?>