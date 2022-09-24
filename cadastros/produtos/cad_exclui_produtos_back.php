
<?php
    include "../../utils/conexao.php"; 

    //dados enviados do script exclui_prod_chamada_confirma_exclusao_logica.php
    $id_produto = $_POST['id_produto'];

    //inserida a data de exclusao do produto para histórico
    $sql="UPDATE caricactoProduto
            SET excluido = 'true', 
                data_exclusao = current_timestamp 
        WHERE id_produto = $id_produto";

    //echo $sql;

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0 )
        // echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
    else
        echo "<script type='text/javascript'>alert('Erro na exclusão !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";
?>
