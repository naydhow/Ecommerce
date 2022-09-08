<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/logopeq_caricacto.svg">

    <script src="../../js/main.js" defer></script>
    <script src="../../js/masks.js"></script>
    <script src="../../js/perfil_photo.js" defer></script>

    <title>Formulário de Cadastro de Usuarios - Tabela Usuario CRUD</title>
</head>
<body>
    <?php
        echo"
        <header id= 'header' >
            <nav class='container'>
                <a  class='logo' href='../../index.php'><img src='../../img/logo.svg'></a>
                <div class='menu'>
                    <ul class='grid'>
                        <li><a class='title' href='../../index.php' target='_parent'>Home</a></li>
                        <li><a class='title' href='../../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                        <li><a class='title' href='../../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a></li>
                        <li><a class='title' href='../../venda/selecao_produtos_front.php' target='_parent'>Seleção</a></li>
                    </ul> 
                </div>


                <div class='toggle icon-menu'></div>
                <div class='toggle icon-close'></div>
            </nav>
        </header>"; 
    ?>

    <div class="color_cadastros">
        <div class="container_paginas">
            <p id="cadastro_titulos" >Cadastro de Usuários</p>

            <div class="form_cad_prod">
                <form enctype="multipart/form-data" action="cad_novo_usuarios_back.php" method="post">
                    <div class="input-group">
                        <div class="input-box">
                            <div class="max-width">
                                <div class="imageContainer"> 
                                <img src="../../img/user.png" alt="Selecione uma foto para o perfil" id="imgPhoto">
                                </div>
                            </div>
                            <div class="answer">
                                <input name="ftperfil" id="ftperfil" type="file" accept="image/*">
                            </div>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Nome:</strong><br />    
                                <input type="text" name="nome" maxlength="100"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Telefone:</strong><br />    
                                <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Email:</strong><br />
                                <input type="email" name="email" maxlength="80"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Senha:</strong><br />
                                <input type="password" name="senha" maxlength="32"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Sexo:</strong><br />
                                <input type="check" name="sexo" /><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Data de nascimento:</strong><br />
                                <input type="date" name="data_nasc" /><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>CPF:</strong><br />
                                <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>CEP:</strong><br />
                                <input type="text" name="cep" id="cep" placeholder="00000-000"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Endereço:</strong><br />
                                <input type="text" name="endereco" id="endereco" maxlength="150"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Cidade:</strong><br />
                                <input type="text" name="cidade" id="cidade" maxlength="30"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="input-box">
                            <label>
                                <strong>Estado:</strong><br />
                                <input type="text" name="estado" id="estado" maxlength="2"/><br />
                                <br />
                            </label>
                        </div>
                        <div class="buttons">
                            <input type="submit" name="button" id="button" value="Enviar" />
                            <a id="button" href='cad_pesq_usuarios_front.php'>Voltar</a><br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>