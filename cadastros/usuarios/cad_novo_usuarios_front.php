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

    <div class="color_cadastros">
        <div class="container_paginas">
       
            <div class="alinha_tituloimg">
                <img class ="img_fofinhas" src="../../img/img_suculenta.svg">
                <p id="titulo_fofo_usu">Cadastro de Usuários</p>
                <img class ="img_fofinhas" src="../../img/img_cacto.svg">
            </div>

          <div class="form_cad_user">
            <form enctype="multipart/form-data" action="cad_novo_usuarios_back.php" method="post">
                

                    <div class="input-box-imagem">
                        <div class="max-width-User">
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
                            <p class="campo_label">Nome</p>
                            <input class="input_user_grande" type="text" name="nome" maxlength="100" placeholder="Digite seu nome completo" />
                        </label>
                    </div>

                    <div class="input-box">
                        <label>
                            <p class="campo_label">Email</p>
                            <input class="input_user_grande" type="email" name="email" maxlength="80" placeholder="xxxxxxxx@yyyyyy.com" />
                        </label>
                    </div>

                    <div class="input-box">
                        <label>
                            <p class="campo_label">Senha</p>
                            <input class="input_user_grande" type="password" name="senha" maxlength="32" placeholder="***********" />
                            </label>
                    </div>
                
                    <div class="input_block">
                        <div class="input-box">
                            <div class="campo_label_peq2">
                                <b id="campo_sexo">Sexo</b>
                                <label><input type="radio" name="sexo" value="Feminino" checked />&nbsp;Feminino</label>
                                <label><input type="radio" name="sexo" value="Masculino" />&nbsp;Masculino </label>
                                <label><input type="radio" name="sexo" value="Prefiro não dizer" />&nbsp;Prefiro não dizer</label>
                            </div>
                        </div>
                    </div>

                    <div class="input_block">
                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">CPF</p>
                                <input class="input_user_pequeno" type="text" name="cpf" id="cpf" placeholder="000.000.000-00" />
                            </label>
                        </div>

                            <div class="input-box">
                                <label>
                                    <p class="campo_label_pequeno">Telefone</p>
                                    <input class="input_user_pequeno" type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000" />
                                </label>
                            </div>
                        </div>

                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">Data Nasc.</p>
                                <input class="input_user_pequeno" type="date" name="data_nasc" />
                            </label>
                        </div>


                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">CEP</p>
                                <input class="input_user_pequeno" type="text" name="cep" id="cep" placeholder="00000-000" />
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <p class="campo_label">Endereço</p>
                                <input class="input_user_grande" type="text" name="endereco" id="endereco" maxlength="150" placeholder="Endereço"/>
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">Cidade:</p>
                                <input class="input_user_medio" type="text" name="cidade" id="cidade" maxlength="30" placeholder="Cidade" />
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">Estado</p>
                                <input class="input_user_peq2" type="text" name="estado" id="estado" maxlength="2" placeholder="XX"/>
                            </label>
                        </div>

                    </div>
                    
                    <div class="buttons_user">
                        <input type="submit" name="button" class="button_crud" value="Enviar" />
                        <a class="button_crud" href='cad_pesq_usuarios_front.php'>Voltar</a>
                    </div>  
             </form>
        </div>
    </div>

    <script src="../../js/cep.js"></script>
    <script src="../../js/perfil_photo.js"></script>
    <script src="../../js/masks.js"></script>
</body>
</html>