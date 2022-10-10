<link rel="stylesheet" href="../../css/style.css">
<link rel="icon" href="../../img/logopeq_caricacto.svg">

<!-- Recuperando as informações do produto -->
<?php   

echo"
            <header id= 'header' >
            <nav class='container'>
                <a href='../../index.php'><img src='../../img/logo.svg' class='logo'></a>
                <div class='menu'>
                    <ul class='grid'>
                        <li><a class='title' href='../../index.php' target='_parent'>Home</a></li>
                        <li><a class='title'>Sobre</a></li>
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
       $id_usuario = $_GET['id_usuario'];
       include "cad_getinfo_usuarios_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<div class="color_cadastros">
       <div class="container_paginas_princ">
              <span class="cadastro_titulos">Alteração de Usuário</span>

              <div class="form_cad_user_alt">
                     <form action="cad_altera_usuarios_back.php" enctype="multipart/form-data" method="post">
                     
                            <div class="input-box-imagem-2">
                                   <div class="max-width-User">
                                          <div class="imageContainer">
                                                 <?php
                                                        if($linha['img'] != 'http://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/')
                                                        {
                                                               echo "<img src='".$linha['img']."' alt='Selecione uma foto para o perfil' id='imgPhoto'>";
                                                        } else {
                                                               echo "<img src='../../img/user.png' alt='Selecione uma foto para o perfil' id='imgPhoto'>";
                                                        }
                                                 ?>
                                          </div>
                                   </div>

                                   <div class="answer">
                                          <input name="ftperfil" id="ftperfil" type="file" accept="image/*">
                                   </div>
                            </div>
                                   
                            <div class="input-box">
                                   <label>
                                          <span class="campo_label">Id do usuário:</span>
                                          <input class="input_user_grande_alt" type="text" name="id_usuario" 
                                          value="<?php echo $linha['id_usuario']; ?>" 
                                          readonly>
                                   </label>
                            </div>
                                          
                            
                            <div class="input-box">         
                                   <label>
                                          <span class="campo_label">Nome</span>
                                          <input class="input_user_grande_alt" type="text" name="nome" maxlength="100"
                                          value="<?php echo $linha['nome']; ?>" >
                                   </label>
                            </div>

                            <div class="input-box">
                                   <label>
                                          <span class="campo_label">Email</span>
                                          <input class="input_user_grande_alt" type="text" name="email" maxlength="80"
                                          value="<?php echo $linha['email']; ?>" >
                                   </label>
                            </div>

                            <div class="input-box">
                                   <label>
                                          <span class="campo_label">Senha</span>
                                          <input class="input_user_grande_alt" type="password" name="senha" maxlength="32"
                                          value="<?php echo $linha['senha']; ?>" >
                                   </label>
                            </div>

                            
                            <div class="input_block">
                                          
                                   <div class="input-box">
                                          <div class="campo_label_peq2">
                                                 <b>Sexo</b>&nbsp;
                                                 <?php
                                                        if('Feminino' == $linha['sexo']){              
                                                               echo " 
                                                                      <label><input type='radio' name='sexo' value='Feminino' checked>&nbsp;Feminino</label>
                                                                      <label><input type='radio' name='sexo' value='Masculino'>&nbsp;Masculino </label>
                                                                      <label><input type='radio' name='sexo' value='Prefiro não dizer'>&nbsp;Prefiro não dizer</label>
                                                                      ";
                                                        } else if('Masculino' == $linha['sexo']) {
                                                               echo " 
                                                                      <label><input type='radio' name='sexo' value='Feminino'>&nbsp;Feminino</label>
                                                                      <label><input type='radio' name='sexo' value='Masculino' checked>&nbsp;Masculino </label>
                                                                      <label><input type='radio' name='sexo' value='Prefiro não dizer'>&nbsp;Prefiro não dizer</label>
                                                                      ";
                                                        } else {
                                                               echo " 
                                                                      <label><input type='radio' name='sexo' value='Feminino'>&nbsp;Feminino</label>
                                                                      <label><input type='radio' name='sexo' value='Masculino'>&nbsp;Masculino </label>
                                                                      <label><input type='radio' name='sexo' value='Prefiro não dizer' checked>&nbsp;Prefiro não dizer</label>
                                                                      ";
                                                        }
                                                 ?>
                                          </label>
                                   </div>

                            </div>

                            <div class="input_block">
                                   <div class="input-box">
                                          <label>
                                                 <span class="campo_label_pequeno">CPF</span>
                                                 <input class="Input_user_pequeno_alt" type="text" name="cpf" id="cpf" placeholder="000.000.000-00"
                                                 value="<?php echo $linha['cpf']; ?>" >
                                          </label>
                                   </div> 
                                   
                                   <div class="input-box">
                                          <label>
                                                 <span class="campo_label_pequeno">Telefone</span>
                                                 <input class="input_user_pequeno_alt" type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000"
                                                 value="<?php echo $linha['telefone']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <span class="campo_label_pequeno">Data Nasc.</span>
                                                 <input  class="input_user_pequeno_alt" type="text" name="data_nasc" 
                                                 value="<?php echo $linha['data_nasc']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <span class="campo_label_pequeno">CEP</span>
                                                 <input class="input_user_pequeno_alt" type="text" name="cep" id="cep" placeholder="00000-000"
                                                 value="<?php echo $linha['cep']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <span class="campo_label">Endereço</span>
                                                 <input class="input_user_grande_alt" type="text" name="endereco" id="endereco" maxlength="150"
                                                 value="<?php echo $linha['endereco']; ?>" >                                          
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <span class="campo_label_pequeno">Cidade</span>
                                                 <input class="input_user_medio_alt" type="text" name="cidade" id="cidade" maxlength="30" 
                                                 value="<?php echo $linha['cidade']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <span class="campo_label_pequeno">Estado</span>
                                                 <input class="input_user_peq2_alt" type="text" name="estado" id="estado" maxlength="2"
                                                 value="<?php echo $linha['estado']; ?>" >
                                          </label>
                                   </div>
                                   
                            </div>

                            <br>
                            <div class="buttons_user">
                                   <input class="button_crud" type="submit" value="Gravar"/>
                                   <input class="button_crud" type="reset" value="Voltar" onclick="history.back()"/>
                            </div>

                     </form>
              </div>
       </div>
</div>

<script src="../../js/cep.js"></script>
<script src="../../js/perfil_photo.js"></script>
<script src="../../js/masks.js"></script>
