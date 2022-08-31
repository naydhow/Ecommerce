<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Carrinho de compras</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
<body>

    <?php 
        include "selecao_produtos_back.php";

        // <!--<img src='img/".$linha['imagem']."' height=250 width=250>-->

        if ($qtde == 0) {
            echo "Não foi encontrado nenhum produto !!!<br><br>";
            return;
        }

        echo '<div style="display:grid; 
                          grid-template-columns: repeat(3,300px); 
                          grid-column-gap: 10px;
						  grid-row-gap: 10px;
                          width=1250px">';

        // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        {
            $preco= number_format($linha['preco'], 2, ',', '.');

            echo "
            <div style='border: 1px solid black;text-align:center'>
                <div>
                    <br>
                    <a href='selecao_detalhes_front.php?id_produto=".$linha['id_produto']."'> 
                       <img src=".$linha['campo_imagem']." style='width:150px; height:100px' />
                    </a>
                </div>

                <div>
                    <div><p>".$linha['nome']."</p></div>
                    <div>R$ ".$preco."</div>";

                    if ($linha['estoque']<=0)
                    {
                        echo "
                        <div><span style='color:red'>Produto esgotado</span></div>";
                    }
                    else
                    {
                        echo "
                        <div>".$linha['estoque']." em estoque</div>";
                    }
					
					echo "<a href='carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."'>Comprar</a>";

                echo "</div><br>";
            echo "</div>";
        }

        echo "</div>";

    ?>
 
</body>
 
</html>