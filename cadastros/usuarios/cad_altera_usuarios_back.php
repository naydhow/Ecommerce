<?php
    include "../../utils/conexao.php"; 

    //dados enviados do script altera_prod_lista.php
    $id_usuario=$_POST['id_usuario'];
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
    // $user_adm=$_POST["user_adm"];

    if($img['tmp_name'] != null)
    {
        move_uploaded_file($img['tmp_name'], '/home/projetoscti/www/projetoscti24/Ecommerce/img_upload/'.$img['name']);
        $imglink = 'https://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/'.$img['name'];
        if($imglink == 'https://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/')
            $imglink = 'https://projetoscti.com.br/projetoscti24/Ecommerce/img/img_perfil.svg';
    }

    if($img['tmp_name'] == null)
    {
        $sql="UPDATE caricactoUsuario
             SET nome = '$nome',
                 telefone = '$telefone',
                 email = '$email', 
                 senha = '$senha',
                 sexo = '$sexo',
                 data_nasc = '$data_nasc',
                 cpf = '$cpf', 
                 cep = '$cep', 
                 endereco = '$endereco', 
                 cidade = '$cidade', 
                 estado = '$estado'
           WHERE id_usuario = $id_usuario;";
    }
    else
    {
        $sql="UPDATE caricactoUsuario
             SET img = '$imglink',
                 nome = '$nome',
                 telefone = '$telefone',
                 email = '$email', 
                 senha = '$senha',
                 sexo = '$sexo',
                 data_nasc = '$data_nasc',
                 cpf = '$cpf', 
                 cep = '$cep', 
                 endereco = '$endereco', 
                 cidade = '$cidade', 
                 estado = '$estado'
           WHERE id_usuario = $id_usuario;";
    }
    
    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_usuarios_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>