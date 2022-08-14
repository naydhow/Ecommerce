<link rel="stylesheet" href="../css/cabecalho.css">
<!-- <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe> -->

<!-- Recuperando as informações do produto -->
<?php
       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuarios_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_altera_usuarios_back.php" method="post">
    <h1>Alteração de Produtos</h1>
    Id do produto
    <input type="text" name="id_usuario" 
           value="<?php echo $linha['id_usuario']; ?>" 
           readonly>
    <br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome']; ?>" >
    <br><br>Descrição
    <input type="text" name="telefone" 
           value="<?php echo $linha['telefone']; ?>" >
    <br><br>Preço
    <input type="text" name="email" 
           value="<?php echo $linha['email']; ?>" >
    <br><br>Custo
    <input type="text" name="senha" 
           value="<?php echo $linha['senha']; ?>" >
    <br><br>Margem de Lucro
    <input type="text" name="sexo" 
           value="<?php echo $linha['sexo']; ?>" >
    <br><br>ICMS
    <input type="text" name="data_nasc" 
           value="<?php echo $linha['data_nasc']; ?>" >
    <br><br>Estoque
    <input type="text" name="cpf" 
           value="<?php echo $linha['cpf']; ?>" >
    <br><br>Estoque
    <input type="text" name="cpf" 
           value="<?php echo $linha['cpf']; ?>" >
    <br><br>Estoque
    <input type="text" name="cep" 
           value="<?php echo $linha['cep']; ?>" >
    <br><br>Estoque
    <input type="text" name="cidade" 
           value="<?php echo $linha['cidade']; ?>" >
    <br><br>Estoque
    <input type="text" name="estado" 
           value="<?php echo $linha['estado']; ?>" >
    <br><br>Estoque
    <input type="text" name="user_adm" 
           value="<?php echo $linha['user_adm']; ?>" >

     <br><br>
    <input type="submit" value="Gravar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>