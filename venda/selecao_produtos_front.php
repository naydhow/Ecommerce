<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Produtos</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../img/logopeq_caricacto.svg">
    </head>
<body>
    <?php 
    echo"                
        <header id='header'>
            <nav class='container'>
                    <a href='../index.php'><img src='../img/logo_final.svg' class='logo'></a>
                    <div class='menu'>
                            <ul class='grid'>
                                    <li><a class='title' href='../index.php'>Home</a></li>
                                    <li><a class='title' href='../sobre.php' target='_parent'>Sobre</a></li>
                                    <li><a class='title' href='../venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
                                    <li><a class='title' href='../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a></li>
                                    <li><a class='title' href='../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a></li>
                            </ul>
                    </div>
                    <a class='title' href='../venda/carrinho_front.php' target='_parent'><img class='icone_topo' src='../img/img_carrinhovazio.svg' ></a>
                    <a class='title'href='../login/login.html' target='_parent'><img class='icone_topo' src='../img/img_perfil.svg'></a>
            </nav>
        </header>
    ";

        include "selecao_produtos_back.php";

        // <!--<img src='img/".$linha['imagem']."' height=250 width=250>-->

        if ($qtde == 0) {
            echo "Não foi encontrado nenhum produto !!!<br><br>";
            return;
        }

        echo '<div class= "container_paginas">';

            echo '<div class= "selecaoProdutos">';

            
                // Criar linhas com os dados dos produtos
                foreach ($resultado_lista as $linha)
                {
                    $preco= number_format($linha['preco'], 2, ',', '.');

                    echo "
                    <div class='box_produto'>
                        <div>
                            <br>
                            <a href='selecao_detalhes_front.php?id_produto=".$linha['id_produto']."'> 
                            <img class= 'img_selecao' src=".$linha['campo_imagem']." />
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
                                <div id='selecao_esgotado'>Esgotado!></div><br>";
                            }
                            else
                            {
                                echo "
                                <div>".$linha['estoque']." em estoque</div><br>";
                            }
                            
                            echo "<a class='selecao_comprar' href='carrinho_front.php?acao=add&id_produto=".$linha['id_produto']."'>Comprar</a>";

                        echo "</div>";
                    echo "</div>";
                }

            echo "</div>";
        echo "</div>";

    ?>
 
</body>
 
</html>