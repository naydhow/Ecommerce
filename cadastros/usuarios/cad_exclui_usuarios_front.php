<link rel="stylesheet" href="../../css/style.css">
<link rel="icon" href="../../img/logopeq_caricacto.png">

<script src="../../js/main.js" defer></script>

<?php
 
       echo"
       <header id= 'header' >
       <nav class='container'>
              <a  class='logo' href='../../index.php'><img src='../../img/logo.png'></a>
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

       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuarios_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
 <div class="container_paginas">
       <div class="container_paginas">
              <p class="cadastro_titulos">Exclusão de Usuário</p>

              <div class="form_cad_prod">
                     <form action="cad_exclui_usuarios_back.php" method="post">
                            <div class="input-group">
                                   <div class="input-box">
                                          <div class="max-width">
                                                 <div class="imageContainer">
                                                        <img src="<?php echo $linha['img']; ?>" alt="Selecione uma foto para o perfil" id="imgPhoto">
                                                 </div>
                                          </div>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Id do usuário:</strong><br>
                                                 <input type="text" name="id_usuario" 
                                                        value="<?php echo $linha['id_usuario']; ?>" 
                                                        readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Nome</strong><br>
                                                 <input type="text" name="nome" maxlength="100"
                                                        value="<?php echo $linha['nome']; ?>"
                                                        readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Telefone</strong><br>
                                                 <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000"
                                                 value="<?php echo $linha['telefone']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Email</strong><br>
                                                 <input type="text" name="email" maxlength="80"
                                                 value="<?php echo $linha['email']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Senha</strong><br>
                                                 <input type="text" name="senha" maxlength="32"
                                                 value="<?php echo $linha['senha']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Sexo</strong><br>
                                                 <input type="text" name="sexo" 
                                                 value="<?php echo $linha['sexo']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Data de Nascimento</strong><br>
                                                 <input type="text" name="data_nasc" 
                                                 value="<?php echo $linha['data_nasc']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>CPF</strong><br>
                                                 <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"
                                                 value="<?php echo $linha['cpf']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>CEP</strong><br>
                                                 <input type="text" name="cep" id="cep" placeholder="00000-000"
                                                 value="<?php echo $linha['cep']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Endereço</strong><br>
                                                 <input type="text" name="endereco" id="endereco" maxlength="150"
                                                 value="<?php echo $linha['endereco']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Cidade</strong><br>
                                                 <input type="text" name="cidade" id="cidade" maxlength="30"
                                                 value="<?php echo $linha['cidade']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <strong>Estado</strong><br>
                                                 <input type="text" name="estado" id="estado" maxlength="2"
                                                 value="<?php echo $linha['estado']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                            </div>
                                   <br><br>
                            <div class="buttons">
                                   <div>
                                          <input id="conf_exclusao" type="submit" value="Confirma exclusão">
                                   </div>
                                   &nbsp;&nbsp;&nbsp;
                                   <div>
                                          <input id="editar" type="button" value="Editar" onclick="location.href='cad_altera_usuarios_front.php?id_usuario=<?php echo $id_usuario ?>';">
                                   </div>
                                   &nbsp;&nbsp;&nbsp;
                                   <div>
                                          <input id="exclui_voltar" type="button" value="Voltar" onclick="location.href='cad_pesq_usuarios_front.php';">
                                   </div>
                            </div>
                     </form>
              </div>
       </div>
</div>