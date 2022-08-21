<link rel="stylesheet" href="../../css/cabecalho.css">

<script src="../../js/main.js" defer></script>

<iframe src="../../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe>

<?php
       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuarios_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_exclui_usuarios_back.php" method="post">
    <h1>Confirmação: Exclusão de Usuarios</h1>
    Id do usuario
    <input type="text" name="id_usuario" 
           value="<?php echo $linha['id_usuario']; ?>" 
           readonly>
    <br><br>Nome
    <input type="text" name="nome" maxlength="100"
           value="<?php echo $linha['nome']; ?>" >
    <br><br>Telefone
    <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000"
           value="<?php echo $linha['telefone']; ?>" >
    <br><br>Email
    <input type="text" name="email" maxlength="80"
           value="<?php echo $linha['email']; ?>" >
    <br><br>Senha
    <input type="text" name="senha" maxlength="32"
           value="<?php echo $linha['senha']; ?>" >
    <br><br>Sexo
    <input type="text" name="sexo" 
           value="<?php echo $linha['sexo']; ?>" >
    <br><br>Data de Nascimento
    <input type="text" name="data_nasc" 
           value="<?php echo $linha['data_nasc']; ?>" >
    <br><br>CPF
    <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"
           value="<?php echo $linha['cpf']; ?>" >
    <br><br>CEP
    <input type="text" name="cep" id="cep" placeholder="00000-000"
           value="<?php echo $linha['cep']; ?>" >
    <br><br>Endereço
    <input type="text" name="endereco" id="endereco" maxlength="150"
           value="<?php echo $linha['endereco']; ?>" >
    <br><br>Cidade
    <input type="text" name="cidade" id="cidade" maxlength="30"
           value="<?php echo $linha['cidade']; ?>" >
    <br><br>Estado
    <input type="text" name="estado" id="estado" maxlength="2"
           value="<?php echo $linha['estado']; ?>" >

     <br><br>
    <input type="submit" value="Confirma exclusão">
    <input type="button" value="Editar" onclick="location.href='cad_altera_usuarios_front.php?id_usuario=<?php echo $id_usuario ?>';">
    <input type="button" value="Voltar" onclick="location.href='cad_pesq_usuarios_front.php';">
</form>