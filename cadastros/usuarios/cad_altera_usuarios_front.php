<link rel="stylesheet" href="../../css/style.css">

<script src="../../js/main.js" defer></script>

<!-- Recuperando as informações do produto -->
<?php   
  echo"
      <div class='container'>
          <div class='top-bar-container'>
          <div class='top-bar-fixed'>
              <div class='top-bar-content'>
              <img  src='../../img/logo_caricacto.png' width: '10px'>
                  <div class='top-bar-content-link'>
                      <a id='link' href='../../index.php' target='_parent'>Página Inicial&nbsp;&nbsp;</a>
                      <a id='link' href='../../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos&nbsp;&nbsp;</a>
                      <a id='link' href='../../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a>
                  </div>
              </div>
          </div>  
          </div>
      </div>";
       $id_usuario = $_GET['id_usuario'];
       include "cad_getinfo_usuarios_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<div class="cadastro_produtos">
       <p id="cad_titulo">Alteração de Usuário</p>

       <div class="form_cad_prod">
              <form action="cad_altera_usuarios_back.php" enctype="multipart/form-data" method="post">
              <div class="input-group">
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
                     <div class="input-group">
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
                                                 value="<?php echo $linha['nome']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Telefone</strong><br>
                                          <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000"
                                          value="<?php echo $linha['telefone']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Email</strong><br>
                                          <input type="text" name="email" maxlength="80"
                                          value="<?php echo $linha['email']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Senha</strong><br>
                                          <input type="text" name="senha" maxlength="32"
                                          value="<?php echo $linha['senha']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Sexo</strong><br>
                                          <input type="text" name="sexo" 
                                          value="<?php echo $linha['sexo']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Data de Nascimento</strong><br>
                                          <input type="text" name="data_nasc" 
                                          value="<?php echo $linha['data_nasc']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>CPF</strong><br>
                                          <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"
                                          value="<?php echo $linha['cpf']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>CEP</strong><br>
                                          <input type="text" name="cep" id="cep" placeholder="00000-000"
                                          value="<?php echo $linha['cep']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Endereço</strong><br>
                                          <input type="text" name="endereco" id="endereco" maxlength="150"
                                          value="<?php echo $linha['endereco']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Cidade</strong><br>
                                          <input type="text" name="cidade" id="cidade" maxlength="30"
                                          value="<?php echo $linha['cidade']; ?>" >
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Estado</strong><br>
                                          <input type="text" name="estado" id="estado" maxlength="2"
                                          value="<?php echo $linha['estado']; ?>" >
                                   </label>
                            </div>
                     </div>
                            <br><br>
                     <div class="buttons">
                            <div>
                                   <input id="altera_gravar" type="submit" value="Gravar"/>
                            </div>

                            &nbsp; &nbsp; &nbsp;

                            <div>
                                   <input id="altera_voltar" type="reset" value="Voltar" onclick="history.back()"/>
                            </div>
                     </div>
              </form>
       </div>
</div>