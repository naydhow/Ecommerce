<link rel="stylesheet" href="../css/style.css">

<!-- Recuperando as informações do produto -->
<?php
       $id_produto = $_GET["id_produto"];
       include "../cadastros/produtos/cad_getinfo_produtos_back.php"; 

       echo"
       <div class='container'>
           <div class='top-bar-container'>
           <div class='top-bar-fixed'>
               <div class='top-bar-content'>
               <img  src='../img/logo_caricacto.png' width: '10px'>
                   <div class='top-bar-content-link'>
                       <a id='link' href='../index.php' target='_parent'>Página Inicial&nbsp;&nbsp;</a>
                       <a id='link' href='../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos&nbsp;&nbsp;</a>
                       <a id='link' href='../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a>
                   </div>
               </div>
           </div>  
           </div>
       </div>";
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

