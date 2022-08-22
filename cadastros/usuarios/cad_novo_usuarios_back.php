<?php
    include "../../utils/conexao.php"; 
    
    // Recuperação de dados
    $img=$_FILES['ftperfil']['tmp_name'];
    $imgtamanho=$_FILES['ftperfil']['size'];
    $imgtipo=$_FILES['ftperfil']['type'];
    $imgnome=$_FILES['ftperfil']['name'];
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

    $fp = fopen($img, 'rb');
    $conteudo = fread($fp, $imgtamanho);
    $conteudo = addcslashes($conteudo);
    fclose($fp);

    // Inserção
    $sql="INSERT INTO caricactoUsuario2
          (img, imgtamanho, imgtipo, imgnome, nome, telefone, email, senha, sexo, data_nasc, cpf, cep, endereco, cidade, estado)
          VALUES (
                '$img',
                '$imgtamanho',
                '$imgtipo',
                '$imgnome',
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