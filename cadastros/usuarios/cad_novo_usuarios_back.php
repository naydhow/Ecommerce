<?php
    include "../../utils/conexao.php"; 
    
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
    // $user_adm=$_POST['F']; //true e false maiusculo

    move_uploaded_file($img['tmp_name'], '/home/projetoscti/www/projetoscti24/EcommerceCRUD2/Ecommerce/img_upload/'.$img['name']);
    $imglink = 'http://projetoscti.com.br/projetoscti24/EcommerceCRUD2/Ecommerce/img_upload/'.$img['name'];

    // Inserção
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
        echo "alert('Usuario salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_usuarios_front.php");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação do produto!')";
        echo '</script>';	
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  