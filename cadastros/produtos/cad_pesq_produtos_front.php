<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Produtos</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../img/cactoIni_final.svg">
    </head>
    <body>
        <?php
            include_once "../../utils/header_2.php";
            session_start();

            if($_SESSION['isadm'] == 't') {
        ?>

        <div class="container_paginas" id="topo">

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
                    echo "<div class='info_pesquisa'>
                                Não foi encontrado nenhum produto correspondente à pesquisa!
                            </div>";
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
                                R$ ".number_format($linha['preco'], 2, ',', '.')."
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
                }
                else
                {
                    echo "<div>";
                    echo "  <div class='section_none'>";
                    echo "      <span>Você não possui permissão para acessar este local.</span>";
                    echo "      <span><b>Contate aos administradores do site.</b></span>";
                    echo "  </div>";
                    echo "</div>";
                }

                include_once "../../utils/footer_2.php";
            ?>    
        </div>

        
        <script src="../../js/main.js"></script>
    </body>
</html>