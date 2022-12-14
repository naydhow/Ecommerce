<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/cactoIni_final.svg">

    <title>Cadastro de Usuário</title>
</head>

<body>
    <?php
    include_once "../../utils/header_2.php";
    session_start();
    ?>

    <div class="section">
        <div class="central">
            <div class="alinha_tituloimg">
                <img class="img_fofinhas" src="../../img/img_suculenta.svg">
                <p id="titulo_fofo_usu">&nbsp;&nbsp; Cadastro de Usuários</p>
                <img class="img_fofinhas" src="../../img/img_cacto.svg">
            </div>

            <div class="borda_fora_form">
                <ul>
                    <li id="form1">
                        <div id="lado1_form">
                            <form enctype="multipart/form-data" action="cad_novo_usuarios_back.php" method="post">
                                <br> <br>
                                <!--<div class="input-box-imagem-prod">
                                    <div class="max-width-prod">
                                        <div class="imageContainer" id="margem_img">
                                            <img src="../../img/camera.svg" alt="Selecione uma imagem para o produto" id="imgProduto">
                                        </div>
                                    </div>
                                    <div class="answer">
                                        <input name="ftproduto" id="ftproduto" type="file" accept="image/*">
                                    </div>
                                </div>-->

                                <div class="input-box-imagem" id="margem_img">
                                    <div class="max-width-User">
                                        <div class="imageContainer">
                                            <img src="../../img/user.png" alt="Selecione uma foto para o perfil" id="imgPhoto">
                                        </div>
                                    </div>
                                    <div class="answer">
                                        <input name="ftperfil" id="ftperfil" type="file" accept="image/*">
                                    </div>
                                </div>

                                <br>

                                <div>
                                    <strong class="textos">NOME*</strong>
                                    <input type="name" name="nome" maxlength="100" placeholder="Digite seu nome completo" class="resposta">
                                </div>
                                <br> <br>
                                <div>
                                    <strong class="textos">E-MAIL*</strong>
                                    <input type="email" name="email" maxlength="80" placeholder="xxxxxxxx@yyyyyy.com" class="resposta">
                                </div>
                                <br><br>
                                <div>
                                    <strong class="textos">SENHA*</strong>
                                    <input type="password" name="senha" maxlength="32" placeholder="***********" class="resposta">
                                </div>
                                <br><br>
                                <div>
                                    <strong class="textos">TELEFONE*</strong>
                                    <input type="text" name="telefone" maxlength="15" placeholder="(00) 00000-0000" id="telefone" class="resposta">
                                    <div>
                                        <br> <br>

                                        <div class="input-box">
                                            <div class="campo_label_peq2">
                                                <strong class="textos">SEXO</strong>
                                                <div class="espaco">
                                                    <label class="opc" id="sexo"><input type="radio" name="sexo" value="Feminino" checked />&nbsp;Feminino</label>&nbsp;
                                                    <label class="opc" id="sexo"><input type="radio" name="sexo" value="Masculino" />&nbsp;Masculino </label>&nbsp;
                                                    <label class="opc" id="sexo"><input type="radio" name="sexo" value="Prefiro não dizer" />&nbsp;Prefiro não dizer</label>&nbsp;
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="input-box">
                                            <label>
                                                <strong class="textos">DATA&nbsp;NASCIMENTO</strong>
                                                <input id="datanasc" type="date" name="data_nasc" />
                                            </label>
                                        </div><br>

                                        <div>
                                            <strong class="textos">CPF</strong>
                                            <input type="text" name="cpf" maxlength="80" id="cpf" class="resposta" placeholder="000.000.000-00">
                                        </div>
                                        <br> <br>
                                        <div>
                                            <strong class="textos">CEP</strong>
                                            <input type="text" name="cep" placeholder="00000-000" id="cep" class="resposta">
                                        </div>
                                        <br> <br>
                                        <div>
                                            <strong class="textos">ENDEREÇO</strong>
                                            <input type="text" name="endereco" maxlength="150" placeholder="Endereço" id="endereco" class="resposta">
                                        </div>
                                        <br> <br>
                                        <div>
                                            <strong class="textos">CIDADE</strong>
                                            <input type="text" name="cidade" maxlength="30" placeholder="Cidade" id="cidade" class="resposta">
                                        </div>
                                        <br> <br>
                                        <div class="input-box">
                                            <label>
                                                <strong class="textos">ESTADO</strong>
                                                <input class="resposta" type="text" name="estado" id="estado" maxlength="2" placeholder="XX" />
                                            </label>
                                        </div>
                                        <br> <br>
                                       
                                        <?php
                                        
                                        if ($_SESSION['isadm'] =='t') {

                                            echo "<div class='input-box'>                                              
                                            <strong class='textos'>USUÁRIO</strong>
                                                    <div class='espaco'>
                                                        <label class='opc' id='user'><input type='radio' name='user' value='false' checked />&nbsp;Comum</label>&nbsp;
                                                        <label class='opc' id='user'><input type='radio' name='user' value='true' />&nbsp;Administrador</label>&nbsp;
                                                    </div>
                                                </div>";
                                        }
                                        ?>

                                        <div>
                                            <input type="submit" name="button" value="Enviar" class="btn_enviar">
                                        </div>
                                        <div class="voltarr">
                                            <a href="../../login/login.html">Voltar</a>
                                        </div>
                            </form>

                        </div>

                    </li>
                    <li>
                        <!--  LADO 2 -->
                        <br>
                        <div id="lado2_form">
                            <div class="borda_rosa">
                                <br><br>
                                <img class="img_form" src="../../img/cactos.jpg">
                                <img class="img_form" src="../../img/cacto_fino.jpg">
                                <img class="img_form" src="../../img/suculentas.jpg">
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <?php

    include_once "../../utils/footer_2.php";

    ?>


    <script src="../../js/main.js"></script>
    <script src="../../js/cep.js"></script>
    <script src="../../js/masks.js"></script>
    <script src="../../js/perfil_photo.js"></script>



</body>

</html>