<link rel="stylesheet" href="../css/style.css">   
<link rel="icon" href="../img/logopeq_caricacto.svg">

<!-- Recuperando as informações do produto -->
<?php

    echo"                
        <header id='header'>
            <nav class='container'>
                    <a href='../index.php'><img src='../img/logo.svg' class='logo'></a>
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
       $id_produto = $_GET["id_produto"];
       include "selecao_getinfo_produtos_back.php"; 

       
?>


<div class="container_paginas">
    <div class="box_produto_detalhes">

    <div class="nome_produto"><?php echo $linha['nome']; ?></div>

    <img src="<?php if($linha['campo_imagem'] == null) echo '../img/prd.jpg'; else echo $linha['campo_imagem']; ?>" class="img_selecao_detalhes" />
    <br><br>
    <b>Código do produto: </b><?php echo $linha['id_produto']; ?>
    <br><br>
    <b>Descrição: </b><?php echo $linha['descricao']; ?>
    <br><br>
    <b>Estoque: </b><?php echo $linha['estoque']; ?>
    <br><br>
    <b>Preço:</b> R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
    <br><br>
    <!-- Código do fornecedor: <?php #echo $linha['id_fornecedor']; ?>
    <br><br> -->

    <a href='carrinho_front.php?acao=add&id_produto=<?php echo $id_produto; ?>' class="selecao_detalhes_button">Comprar</a>
    &nbsp;<a href="selecao_produtos_front.php" class="selecao_detalhes_button">Voltar</a>


    </div>

</div>

