<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/logopeq_caricacto.svg">

    <title>Formulário de Cadastro de Usuarios - Tabela Usuario CRUD</title>
</head>

<body>
    <?php
   echo"
   <header id= 'header' >
   <nav class='container'>
       <a href='../../index.php'><img src='../../img/logo_final.svg' class='logo'></a>
       <div class='menu'>
           <ul class='grid'>
               <li><a class='title' href='../../index.php' target='_parent'>Home</a></li>
               <li><a class='title'href='../../sobre.php' target='_parent'>Sobre</a></li>
               <li><a class='title' href='../../venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
               <li><a class='title' href='../../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a></li>
               <li><a class='title' href='../../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a></li>
           </ul>
       </div>
       <a class='title' href='../../venda/carrinho_front.php' target='_parent'><img class='icone_topo' src='../../img/img_carrinhovazio.svg' ></a></li>
       <a class='title'href='../../login/login.html' target='_parent'><img class='icone_topo' src='../../img/img_perfil.svg'></a></li>
       <div class='toggle icon-menu'></div>
       <div class='toggle icon-close'></div>
   </nav>
   </header>"; 
    ?>
    <div class="alinha_tituloimg">
                <img class ="img_fofinhas" src="../../img/img_suculenta.svg">
                <p id="titulo_fofo_usu">&nbsp;&nbsp; Cadastro de Usuários</p>
                <img class ="img_fofinhas" src="../../img/img_cacto.svg">
    </div>
            
    <div class="borda_fora_form">
        <form enctype="multipart/form-data" action="cad_novo_produtos_back.php" method="post">

    <div id="lado1_form">
        <br> <br>
            <div class="input-box-imagem-prod">
                    <div class="max-width-prod">
                        <div class="imageContainer">
                            <img src="../../img/camera.svg" alt="Selecione uma imagem para o produto" id="imgProduto">
                        </div>
                    </div>
                <div class="answer">
                     <input name="ftproduto" id="ftproduto" type="file" accept="image/*">
                </div>
            </div>
            <br>

            <div>
                <strong class="email_senha">NOME: </strong>
                <input type="email" name="email" maxlength="80" class="resposta">
            </div>
            <br> <br>
            <div>
                <strong class="email_senha">E-MAIL: </strong>
                <input type="email" name="email" maxlength="80" class="resposta">
            </div>
            <br> <br>
            <div>
                <strong class="email_senha">SENHA: </strong>
                <input type="email" name="email" maxlength="80" class="resposta">
            </div>
            <br> <br>
            <div>
                <strong class="email_senha">TELEFONE: </strong>
                <input type="email" name="email" maxlength="80" class="resposta">
            <div>
            <br> <br>

            <div class="input_block">
                        <div class="input-box">
                            <div class="campo_label_peq2">
                            <strong class="email_senha">SEXO: </strong><br>
                                <label class="email_senha"><input type="radio" name="sexo" value="Feminino" checked />&nbsp;Feminino</label>
                                <label class="email_senha"><input type="radio" name="sexo" value="Masculino" />&nbsp;Masculino </label>
                                <label class="email_senha"><input type="radio" name="sexo" value="Prefiro não dizer" />&nbsp;Prefiro não dizer</label>
                            </div>
                        </div>
            </div>

            <div class="input-box">
                            <label>
                                <p class="email_senha">Data&nbsp;Nasc.</p>
                                <input class="email_senha" type="date" name="data_nasc" />
                            </label>
            </div>

            <div>
                <strong class="email_senha">CPF: </strong>
                <input type="email" name="email" maxlength="80" class="resposta">
            </div>
            <br> <br>
            <div>
                <strong class="email_senha">CEP: </strong>
                <input type="email" name="email" maxlength="80" class="resposta">
            </div>
            <br> <br>
            <div>
                <strong class="email_senha">ENDEREÇO: </strong>
                <input type="email" name="email" maxlength="80" class="resposta">
            </div>
            <br> <br>
            <div>
                <strong class="email_senha">CIDADE: </strong>
                <input type="email" name="email" maxlength="80" class="resposta">
            </div>
            <br> <br>
            <div class="input-box">
                            <label>
                                <p class="email_senha">Estado</p>
                                <input class="email_senha" type="text" name="estado" id="estado" maxlength="2" placeholder="XX"/>
                            </label>
            </div>
        
    </div>

                                            <!--- LADO 2 -->

        <div id="lado2_form">
            <div class="borda_rosa">
            <br><br>
            <img class="img_login" src="../../img/cacto_login.svg">
            <br> <br><br> <br><br><br>
            <img class="img_login" src="../../img/vaso_redondo_mini.svg">
            </div>
        </div>


        </form>
        </div>


    <script src="../../js/cep.js"></script>
    <script src="../../js/perfil_photo.js"></script>
    <script src="../../js/masks.js"></script>
</body>
</html>