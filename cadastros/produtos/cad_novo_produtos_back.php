<?php
    include "../../utils/conexao.php"; 
    
    // Recuperação de dados
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $estoque=$_POST['estoque'];
    $codigovisual=$_POST['codigovisual'];
    $campo_imagem=$_POST['campo_imagem'];
    $preco=$_POST['preco'];
    $custo=$_POST['custo'];
    $margem_lucro=$_POST['margem_lucro'];
    $icms=$_POST['icms'];
    // $excluido='FALSE';

    // Inserção
    $sql="INSERT INTO caricactoProduto
          (nome, descricao, estoque, codigovisual, campo_imagem, preco, custo, margem_lucro, icms)
          VALUES (
                '$nome',
                '$descricao',
                $estoque,
                $codigovisual,
                '$campo_imagem',
                $preco, 
                $custo,
                $margem_lucro,
                $icms);";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Produto salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_produtos_front.php");
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