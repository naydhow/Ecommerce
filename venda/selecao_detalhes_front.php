<link rel="stylesheet" href="../css/style.css">   
<link rel="icon" href="../img/logopeq_caricacto.svg">

<!-- Recuperando as informações do produto -->
<?php
       include_once "../utils/header_3.php";
       $id_produto = $_GET["id_produto"];
       include "selecao_getinfo_produtos_back.php"; 
?>


<div class="container_paginas" id="topo">
    <div class="box_produto_detalhes">

    <div class="nome_produto"><?php echo $linha['nome']; ?></div>

    <img src="<?php if($linha['campo_imagem'] == "http://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/") echo '../img/prd.jpg'; else echo $linha['campo_imagem']; ?>" class="img_selecao_detalhes" />
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
    
    <?php

        include_once "../utils/footer_3.php";

    ?>

</div>



<script src="../js/main.js"></script>
