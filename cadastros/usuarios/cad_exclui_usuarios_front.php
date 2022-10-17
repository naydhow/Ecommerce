<link rel="stylesheet" href="../../css/style.css">
<link rel="icon" href="../../img/logopeq_caricacto.svg">
<title>Exclusão de Produtos</title>

<?php
       include_once "../../utils/header_2.php"; 
       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuarios_back.php";
?>

<!-- Formulário (após as informações serem carregadas) -->

<div class="section">
    <div class="central">
        <div class="alinha_tituloimg">
                <img class="img_fofinhas" src="../../img/img_suculenta.svg">
                <p id="titulo_fofo_usu">&nbsp;&nbsp; Exclusão de Usuários</p>
                <img class="img_fofinhas" src="../../img/img_cacto.svg">
            </div>

        <div class="borda_fora_form_ALT">
            <ul>
                <li id="form1">
                    <div id="lado1_form">
                        <form action="cad_exclui_usuarios_back.php" method="post">
                            
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
                            <br><br>

                        <div id="margem_img">
                                <div class="max-width-User">
                                    <div class="imageContainer">
                                            <img src="<?php echo $linha['img']; ?>" alt="Selecione uma foto para o perfil" id="imgPhoto">
                                    </div>
                                </div>
                        </div>


                            <br><br>
                            
                            <div>
                                <strong class="textos">ID USUÁRIO</strong>
                                <input type="text" name="id_usuario" value="<?php echo $linha['id_usuario']; ?>" readonly class="resposta">
                            </div>
                            <br> <br>
                            <div>
                                <strong class="textos">NOME</strong>
                                <input type="text" name="nome" maxlength="100" value="<?php echo $linha['nome']; ?>" class="resposta">
                            </div>
                            <br> <br>
                            <div>
                                <strong class="textos">E-MAIL</strong>
                                <input type="text" name="email" maxlength="80" value="<?php echo $linha['email']; ?>" class="resposta">
                            </div>
                            <br><br>
                            <div>
                                <strong class="textos">SENHA</strong>
                                <input type="password" name="senha" maxlength="32" value="<?php echo $linha['senha']; ?>" class="resposta">
                            </div>
                            <br><br>
                            <div>
                                <strong class="textos">FONE</strong>
                                <input type="text" name="telefone" placeholder="(00) 00000-0000" value="<?php echo $linha['telefone']; ?>" class="resposta">
                                <div>
                                    <br> <br>

                                    <div class="input_block">
                                        <div class="input-box">
                                                <strong class="textos">SEXO</strong>
                                                <div class="espaco">
                                                    <?php
                                                            if('Feminino' == $linha['sexo']){              
                                                                echo " 
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Feminino' checked>&nbsp;Feminino&nbsp;</label>
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Masculino'>&nbsp;Masculino&nbsp;</label>
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Prefiro não dizer'>&nbsp;Prefiro não dizer&nbsp;</label>
                                                                        ";
                                                            } else if('Masculino' == $linha['sexo']) {
                                                                echo " 
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Feminino'>&nbsp;Feminino&nbsp;</label>
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Masculino' checked>&nbsp;Masculino&nbsp;</label>
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Prefiro não dizer'>&nbsp;Prefiro não dizer&nbsp;</label>
                                                                        ";
                                                            } else {
                                                                echo " 
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Feminino'>&nbsp;Feminino&nbsp;</label>
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Masculino'>&nbsp;Masculino&nbsp;</label>
                                                                        <label class='opc' id='sexo'><input type='radio' name='sexo' value='Prefiro não dizer' checked>&nbsp;Prefiro não dizer&nbsp;</label>
                                                                        ";
                                                            }
                                                    ?>
                                                </div>
                                        </div>
                                    </div>

                                    <br>
                                    <br>

                                    <div class="input-box">
                                        <label>
                                            <strong class="textos">DATA&nbsp;NASCIMENTO</strong>
                                            <input id="datanasc" type="text" name="data_nasc" value="<?php echo $linha['data_nasc']; ?>" />
                                        </label>
                                    </div><br>

                                    <div>
                                        <strong class="textos">CPF</strong>
                                        <input class="resposta" type="text" name="cpf" placeholder="000.000.000-00" value="<?php echo $linha['cpf']; ?>">
                                    </div>
                                    <br> <br>
                                    <div>
                                        <strong class="textos">CEP</strong>
                                        <input type="text" name="cep" placeholder="00000-000"  id="cep" value="<?php echo $linha['cep']; ?>" class="resposta">
                                    </div>
                                    <br> <br>
                                    <div>
                                        <strong class="textos">ENDEREÇO</strong>
                                        <input type="text" name="endereco" maxlength="150" value="<?php echo $linha['endereco']; ?>" class="resposta">
                                    </div>
                                    <br> <br>
                                    <div>
                                        <strong class="textos">CIDADE</strong>
                                        <input type="text" name="cidade" maxlength="30" value="<?php echo $linha['cidade']; ?>" class="resposta">
                                    </div>
                                    <br> <br>
                                    <div class="input-box">
                                        <label>
                                            <strong class="textos">ESTADO</strong>
                                            <input class="resposta" type="text" name="estado" id="estado" maxlength="2" value="<?php echo $linha['estado']; ?>" />
                                        </label>
                                    </div>
                                    <br>

                                    <div class="espaco_button">
                                        <input type="submit" value="Excluir" class="bnt_menores">
                                        <input class="bnt_menores" type="button" value="Editar" onclick="location.href='cad_altera_usuarios_front.php?id_usuario=<?php echo $id_usuario ?>';">
                                        <input class="bnt_menores" type="button" value="Voltar" onclick="location.href='cad_pesq_usuarios_front.php';">
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
                            <img class="img_form" src="../../img/cacto_login.svg">
                            <img class="img_form" src="../../img/vaso_redondo_mini.svg">
                            <img class="img_form" src="../../img/vaso_redondo_mini.svg">
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