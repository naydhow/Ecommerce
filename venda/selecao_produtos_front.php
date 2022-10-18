<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Produtos</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../img/cactoIni_final.svg">
    </head>
    <body>
        <?php 
            include_once "../utils/header_3.php";

            include "selecao_produtos_back.php";

            // <!--<img src='img/".$linha['imagem']."' height=250 width=250>-->

            if ($qtde == 0) {
                echo "Não foi encontrado nenhum produto !!!<br><br>";
                return;
            }

            echo '<main>';
            echo '<div class= "container_paginas" id="topo">';

                echo '<div class= "selecaoProdutos">';

                
                    // Criar linhas com os dados dos produtos
                    foreach ($resultado_lista as $linha)
                    {
                        $preco= number_format($linha['preco'], 2, ',', '.');
                        $img;
                        if($linha['campo_imagem'] == "http://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/") $img='../img/prd.jpg'; else  $img=$linha['campo_imagem'];

                        echo "
                        <div class='box_produto'>
                            <div>
                                <br>
                                <a href='selecao_detalhes_front.php?id_produto=".$linha['id_produto']."'> 
                                <img class= 'img_selecao' src=".$img." />
                                </a>
                                <br><br>
                            </div>

                            <div>
                                <div><p><b>".$linha['nome']."</b></p></div>
                                <br>
                                <div>R$ ".$preco."</div>
                                <br>";

                                if ($linha['estoque']<=0)
                                {
                                    echo "
                                    <div id='selecao_esgotado'>Esgotado!</div><br>";
                                }
                                else
                                {
                                    echo "
                                    <div>".$linha['estoque']." em estoque</div><br>";
                                    echo "<a class='selecao_comprar' href='carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."'>Comprar</a>";
                                }

                            echo "</div><br>";
                        echo "</div>";
                    }

            echo "</div>";
            echo "</div>";

            echo "</main>";
           
            include_once "../utils/footer_3.php";
?>

<script src="../js/main.js"></script>
    </body>
</html>