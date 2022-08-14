<?php
    include "../utils/conexao.php"; 

    //dados enviados do script altera_prod_lista.php
    $nome=$_POST["nome"];
    $telefone=$_POST["telefone"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $sexo=$_POST["sexo"];
    $data_nasc=$_POST["data_nasc"];
    $cpf=$_POST["cpf"];
    $cep=$_POST["cep"];
    $endereco=$_POST["endereco"];
    $cidade=$_POST["cidade"];
    $estado=$_POST["estado"];
    // $user_adm=$_POST["user_adm"];

    $sql="UPDATE caricactoUsuario
             SET nome = '$nome',
                 descricao = '$descricao',
                 preco = $preco, 
                 custo = $custo,
                 margem_lucro = $margem_lucro,
                 icms = $icms,
                 estoque = $estoque 
           WHERE id_produto = $id_produto;";
    
    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>