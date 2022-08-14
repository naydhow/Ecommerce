<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Usuarios - Tabela Usuario CRUD</title>
</head>
<body>
    <link rel="stylesheet" href="../css/cabecalho.css">
    <!-- <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
            width="100%" scrolling="no" allowfullscreen>
    </iframe> -->

    <h1>Cadastro de Usuarios</h1>

    <form action="cad_novo_usuario_back.php" method="post">
        <label>
            <strong>Nome:</strong><br />    
            <input type="text" name="nome" /><br />
            <br />
        </label>
        <label>
            <strong>Telefone:</strong><br />    
            <input type="text" name="telefone" /><br />
            <br />
        </label>
        <label>
            <strong>Email:</strong><br />
            <input type="text" name="email" /><br />
            <br />
        </label>
        <label>
            <strong>Senha:</strong><br />
            <input type="text" name="senha"  /><br />
            <br />
        </label>
        <label>
            <strong>Sexo:</strong><br />
            <input type="text" name="sexo" /><br />
            <br />
        </label>
        <label>
            <strong>Data de nascimento:</strong><br />
            <input type="text" name="data_nasc" /><br />
            <br />
        </label>
        <label>
            <strong>CPF:</strong><br />
            <input type="text" name="cpf" /><br />
            <br />
        </label>
        <label>
            <strong>CEP:</strong><br />
            <input type="text" name="cep" /><br />
            <br />
        </label>
        <label>
            <strong>Endereço:</strong><br />
            <input type="text" name="endereco" /><br />
            <br />
        </label>
        <label>
            <strong>Cidade:</strong><br />
            <input type="text" name="cidade" /><br />
            <br />
        </label>
        <label>
            <strong>Estado:</strong><br />
            <input type="text" name="estado" /><br />
            <br />
        </label>
        <input type="submit" name="button" id="button" value="Enviar" />
        <a href='cad_pesq_usuarios_front.php'>Voltar</a><br><br>
    </form> 
</body>
</html>