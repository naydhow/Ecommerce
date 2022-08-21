<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />

    <script src="../../js/main.js" defer></script>
    <script src="../../js/masks.js"></script>
    <script src="../../js/perfil_photo.js" defer></script>

    <title>Formulário de Cadastro de Usuarios - Tabela Usuario CRUD</title>
</head>
<body>
    <link rel="stylesheet" href="../../css/style.css">
    <!-- <link rel="stylesheet" href="../../css/cabecalho.css"> -->
    <iframe src="../../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
            width="100%" scrolling="no" allowfullscreen>
    </iframe>

    <h1>Cadastro de Usuarios</h1>

    <form action="cad_novo_usuarios_back.php" method="post">
            <div>
                <div class="max-width">
                    <div class="imageContainer">
                    <img src="../../img/user.png" alt="Selecione uma foto para o perfil" id="imgPhoto">
                    </div>
                </div>
                <div class="answer">
                    <input name="ftperfil" id="ftperfil" type="file" accept="image/*">
                </div>
            </div>
        <label>
            <strong>Nome:</strong><br />    
            <input type="text" name="nome" maxlength="100"/><br />
            <br />
        </label>
        <label>
            <strong>Telefone:</strong><br />    
            <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000"/><br />
            <br />
        </label>
        <label>
            <strong>Email:</strong><br />
            <input type="email" name="email" maxlength="80"/><br />
            <br />
        </label>
        <label>
            <strong>Senha:</strong><br />
            <input type="password" name="senha" maxlength="32"/><br />
            <br />
        </label>
        <label>
            <strong>Sexo:</strong><br />
            <input type="check" name="sexo" /><br />
            <br />
        </label>
        <label>
            <strong>Data de nascimento:</strong><br />
            <input type="date" name="data_nasc" /><br />
            <br />
        </label>
        <label>
            <strong>CPF:</strong><br />
            <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"/><br />
            <br />
        </label>
        <label>
            <strong>CEP:</strong><br />
            <input type="text" name="cep" id="cep" placeholder="00000-000"/><br />
            <br />
        </label>
        <label>
            <strong>Endereço:</strong><br />
            <input type="text" name="endereco" id="endereco" maxlength="150"/><br />
            <br />
        </label>
        <label>
            <strong>Cidade:</strong><br />
            <input type="text" name="cidade" id="cidade" maxlength="30"/><br />
            <br />
        </label>
        <label>
            <strong>Estado:</strong><br />
            <input type="text" name="estado" id="estado" maxlength="2"/><br />
            <br />
        </label>
        <input type="submit" name="button" id="button" value="Enviar" />
        <a href='cad_pesq_usuarios_front.php'>Voltar</a><br><br>
    </form> 
</body>
</html>