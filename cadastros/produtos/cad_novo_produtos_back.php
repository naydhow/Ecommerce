<?php
    include "../../utils/conexao.php"; 
    
    // Recuperação de dados
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $estoque=$_POST['estoque'];
    $codigovisual=$_POST['codigovisual'];
    $img=$_FILES['ftproduto'];
    $preco=$_POST['preco'];
    $custo=$_POST['custo'];
    $margem_lucro=$_POST['margem_lucro'];
    $icms=$_POST['icms'];
    $excluido='false';
    // $excluido='FALSE';

    move_uploaded_file($img['tmp_name'], '/home/projetoscti/www/projetoscti24/Ecommerce/img_upload/'.$img['name']);
    $imglink = 'https://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/'.$img['name'];
    if($imglink == 'https://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/')
        $imglink = 'https://projetoscti.com.br/projetoscti24/Ecommerce/img/prd.jpg';

    // Inserção
    $sql="INSERT INTO caricactoProduto
          (nome, descricao, estoque, codigovisual, campo_imagem, preco, custo, margem_lucro, icms, excluido)
          VALUES (
                '$nome',
                '$descricao',
                $estoque,
                '$codigovisual',
                '$imglink',
                $preco, 
                $custo,
                $margem_lucro,
                $icms,
                '$excluido');";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Produto salvo com sucesso!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação do produto!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  