<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Produtos</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../img/logopeq_caricacto.svg">
    </head>
    <body>
        <?php
            echo"
            <header id='header'></header>"; 
        ?>

        <div class="container_paginas">

            <div class="pesq">
                <div class="pesquisa">
                    <form action="#" method="post">
                    <div class="divisoes">
                        <div class="pesquisaBotao">
                            <button>
                                <img src="../../img/search.svg" alt="Lupa de Pesquisa">
                            </button>
                        </div>
                        <div class="pesquisaTexto">
                            <input type="text" name="textPesquisa" placeholder="Pesquise um produto especifico" maxlength="116">
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>

            <a class="links" href='cad_novo_produtos_front.php'>+ Adicionar Produto</a><br><br>

            <?php
                include "cad_pesq_produtos_back.php";

                if ($qtde == 0) {
                    echo "Não foi encontrado nenhum produto !!!<br><br>";
                    return;
                }

                // Começar tabela e criar o cabeçalho
                echo "
                <div class='tabela'>
                    <div class='cell cellMedia cellHeader'>
                        <b>Id Produto</b>
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        <b>Nome</b>
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        <b>Estoque</b>
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        <b>Imagem</b>
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        <b>Preço</b>
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        <b>Alterar</b>
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        <b>Excluir</b>
                    </div>
                    ";


                    // Criar linhas com os dados dos produtos
                    foreach ($resultado_lista as $linha)
                    {
                        $img;
                        if($linha['campo_imagem'] == "http://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/") $img='../../img/prd.jpg'; else  $img=$linha['campo_imagem'];
                        echo "
                            <div class='cell cellMedia'>
                                ".$linha['id_produto']."
                            </div>
                            <div class='cell cellGrande'>
                                ".$linha['nome']."
                            </div>
                            <div class='cell cellGrande'>
                                ".$linha['estoque']."
                            </div>
                            <div class='cell cellEnorme'>
                                ".'<img src="'.$img.'">'."
                            </div>
                            <div class='cell cellGrande'>
                                R$ ".$linha['preco']."
                            </div>
                            <div class='cell cellGrande'>
                                <a  class='cellGrande' href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Alterar</a>&nbsp;
                            </div>
                            <div class='cell cellGrande'>
                                <a  class='cellGrande' href='cad_exclui_produtos_front.php?id_produto=".$linha['id_produto']."'> Excluir</a>&nbsp;
                            </div>
                        "; 
                    } 
                // Fechando a tag da tabela
                echo "</div>";
            ?>    
        </div>
    </body>
</html>