<link rel="stylesheet" href="../css/style_header.css">
<iframe src="../utils/header.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe>

<!-- Recuperando as informações do produto -->
<?php
       $id_produto = $_GET["id_produto"];
       include "cad_getinfo_produto_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_altera_produtos_back.php" method="post">
    <h1>Alteração de Produtos</h1>
    Id do produto
    <input type="text" name="id_produto" 
           value="<?php echo $linha['id_produto']; ?>" 
           readonly>
    <br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome']; ?>" >
    <br><br>Descrição
    <input type="text" name="descricao" 
           value="<?php echo $linha['descricao']; ?>" >
    <br><br>Preço
    <input type="text" name="preco" 
           value="<?php echo $linha['preco']; ?>" >
    <br><br>Custo
    <input type="text" name="custo" 
           value="<?php echo $linha['Custo']; ?>" >
    <br><br>Margem de Lucro
    <input type="text" name="margem_lucro" 
           value="<?php echo $linha['margem_lucro']; ?>" >
    <br><br>ICMS
    <input type="text" name="icms" 
           value="<?php echo $linha['icms']; ?>" >
    <br><br>Estoque
    <input type="text" name="estoque" 
           value="<?php echo $linha['estoque']; ?>" >

     <br><br>
    <input type="submit" value="Gravar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>