<link rel="stylesheet" href="../css/style.css">

<!-- Recuperando as informações do produto -->
<?php
       $id_produto = $_GET["id_produto"];
       include "../cadastros/produtos/cad_getinfo_produtos_back.php"; 
?>

<div style="border: 1px solid black">

    <h1><?php echo $linha['nome']; ?></h1>

    <img src='../img/prd.jpg' style='width:300px; height:250px' />
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

