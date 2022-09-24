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
            <header id= 'header' >
            <nav class='container'>
                <a href='../../index.php'><img src='../../img/logo.svg' class='logo'></a>
                <div class='menu'>
                    <ul class='grid'>
                        <li><a class='title' href='../../index.php' target='_parent'>Home</a></li>
                        <li><a class='title'>Sobre</a></li>
                        <li><a class='title' href='../../venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
                        <li><a class='title' href='../../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a></li>
                        <li><a class='title' href='../../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a></li>
                    </ul>
                </div>
                <a class='title' href='../../venda/carrinho_front.php' target='_parent'><img class='icone_topo' src='../../img/img_carrinhovazio.svg' ></a></li>
                <a class='title'href='../../login/login.html' target='_parent'><img class='icone_topo' src='../../img/img_perfil.svg'></a></li>
                <div class='toggle icon-menu'></div>
                <div class='toggle icon-close'></div>
            </nav>
            </header>"; 
        ?>

        <div class="container_paginas">

            <div class="pesq">
                <div class="pesquisa">
                    <form action="" method="post">
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
                                ".'<img src="'.$linha['campo_imagem'].'">'."
                            </div>
                            <div class='cell cellGrande'>
                                ".$linha['preco']."
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