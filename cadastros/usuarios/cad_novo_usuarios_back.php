<?php
    include "../../utils/conexao.php";

    session_start();
    
    // Recuperação de dados
    $img=$_FILES['ftperfil'];
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $sexo=$_POST['sexo'];
    $data_nasc=$_POST['data_nasc'];
    $cpf=$_POST['cpf'];
    $cep=$_POST['cep'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    if($_SESSION['isadm'] == true)
    $user_adm=$_POST['user']; //true e false maiusculo
    

    move_uploaded_file($img['tmp_name'], '/home/projetoscti/www/projetoscti24/Ecommerce/img_upload/'.$img['name']);
    $imglink = 'https://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/'.$img['name'];
    if($imglink == 'https://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/')
        $imglink = 'https://projetoscti.com.br/projetoscti24/Ecommerce/img/img_perfil.svg';

    // Inserção
    if($_SESSION['isadm'] == true)
    $sql="INSERT INTO caricactoUsuario
          (img, nome, telefone, email, senha, sexo, data_nasc, cpf, cep, endereco, cidade, estado, user_adm)
          VALUES (
                '$imglink',
                '$nome',
                '$telefone',
                '$email', 
                '$senha',
                '$sexo',
                '$data_nasc',
                '$cpf', 
                '$cep', 
                '$endereco', 
                '$cidade', 
                '$estado',
                '$user_adm');
                ";
    else
    $sql="INSERT INTO caricactoUsuario
          (img, nome, telefone, email, senha, sexo, data_nasc, cpf, cep, endereco, cidade, estado)
          VALUES (
                '$imglink',
                '$nome',
                '$telefone',
                '$email', 
                '$senha',
                '$sexo',
                '$data_nasc',
                '$cpf', 
                '$cep', 
                '$endereco', 
                '$cidade', 
                '$estado');
                ";
    
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Usuário salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_usuarios_front.php");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro ao cadastrar o usuário!')";
        echo '</script>';	
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  