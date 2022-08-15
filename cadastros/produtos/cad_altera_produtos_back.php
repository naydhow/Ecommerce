<?php
    include "../../utils/conexao.php"; 

    //É só um teste

    //dados enviados do script altera_prod_lista.php
    $id_produto = $_POST['id_produto'];
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $estoque=$_POST['estoque'];
    $codigovisual=$_POST['codigovisual'];
    $campo_imagem=$_POST['campo_imagem'];
    $preco=$_POST['preco'];
    $custo=$_POST['custo'];
    $margem_lucro=$_POST['margem_lucro'];
    $icms=$_POST['icms'];

    $sql="UPDATE caricactoProduto 
             SET nome = '$nome',
                 descricao = '$descricao',
                 estoque = $estoque,
                 codigovisual = '$codigovisual',
                 campo_imagem = '$campo_imagem',
                 preco = $preco, 
                 custo = $custo,
                 margem_lucro = $margem_lucro,
                 icms = $icms
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