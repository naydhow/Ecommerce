<link rel="stylesheet" href="../css/style.css">

<!-- Recuperando as informações do produto -->
<?php

    echo"
    <header id= 'header' >
        <nav class='container'>
            <a  class='logo' href='../index.php'><img src='../img/logo_caricacto.png'></a>
            <div class='menu'>
                <ul class='grid'>
                    <li><a class='title' href='../index.php' target='_parent'>Home</a></li>
                    <li><a class='title' href='../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                    <li><a class='title' href='../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a></li>
                    <li><a class='title' href='../venda/selecao_produtos_front.php' target='_parent'>Seleção</a></li>
                </ul> 
            </div>


            <div class='toggle icon-menu'></div>
            <div class='toggle icon-close'></div>
        </nav>
    </header>"; 
       $id_produto = $_GET["id_produto"];
       include "selecao_getinfo_produtos_back.php"; 

       
?>

<div style="border: 1px solid black">

    <h1><?php echo $linha['nome']; ?></h1>

    <img src="<?php if($linha['campo_imagem'] == null) echo '../img/prd.jpg'; else echo $linha['campo_imagem']; ?>" style='width:300px; height:250px' />
    <br><br>
    Código do produto:<?php echo $linha['id_produto']; ?>
    <br><br>
    Descrição: <?php echo $linha['descricao']; ?>
    <br><br>
    Quantidade : <?php echo $linha['estoque']; ?>
    <br><br>
    Preço: R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
    <br><br>
    <!-- Código do fornecedor: <?php #echo $linha['id_fornecedor']; ?>
    <br><br> -->
    <a href='carrinho_front.php?acao=add&id_produto=<?php echo $id_produto; ?>'>Comprar</a>
    &nbsp;<a href="selecao_produtos_front.php">Voltar</a>
</div>

