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
      
       $id_produto =$_GET['id_produto'];
       include "cad_getinfo_produtos_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<div color="color_cadastros">
       <div class="container_paginas">
              <p  class="cadastro_titulos">Alteração de Produtos</p>

              <div class="alt_form_prod">
                     <form action="cad_altera_produtos_back.php" enctype="multipart/form-data" method="post">

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label">Id do produto</p><br>
                                                 <input  class="input_grande_alt" type="text" name="id_produto" 
                                                 value="<?php echo $linha['id_produto']; ?>" 
                                                 readonly>
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label">Nome</p>
                                                 <input class="input_grande_alt" type="text" name="nome" 
                                                 value="<?php echo $linha['nome']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label">Descrição</p>
                                                 <input class="input_grande_alt" type="text" name="descricao" 
                                                 value="<?php echo $linha['descricao']; ?>" >
                                          </label>
                                   </div> 

                                   <div class="input-box-imagem">
                                          <div>
                                                 <p class="campo_label_pequeno">Imagem</p>
                                                 <div class="max-width">
                                                        <div class="imageContainer">
                                                               <?php
                                                                      if($linha['campo_imagem'] != 'null')
                                                                      {
                                                                             echo "<img src='".$linha['campo_imagem']."' alt='Selecione uma imagem para o produto' id='imgProduto'>";
                                                                      } else {
                                                                             echo "<img src='../../img/camera.svg' alt='Selecione uma imagem para o produto' id='imgProduto'>";
                                                                      }
                                                               ?>
                                                        </div>
                                                 </div>
                                                 <div class="answer">
                                                        <input name="ftproduto" id="ftproduto" type="file" accept="image/*">
                                                 </div>
                                          </div>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">Cod. Visual</p>
                                                 <input class="input_pequeno_alt" type="text" name="codigovisual" 
                                                 value="<?php echo $linha['codigovisual']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">Estoque</p>
                                                 <input class="input_pequeno_alt" type="number" name="estoque" 
                                                 value="<?php echo $linha['estoque']; ?>" >
                                          </label>
                                   </div>

                                   

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">Preço</p>
                                          <input class="input_pequeno_alt" type="text" name="preco" 
                                                 value="<?php echo $linha['preco']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">Custo</p>
                                                 <input class="input_pequeno_alt" type="text" name="custo" 
                                                 value="<?php echo $linha['custo']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">M. Lucro</p>
                                                 <input class="input_pequeno_alt" type="text" name="margem_lucro" 
                                                 value="<?php echo $linha['margem_lucro']; ?>" >
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">ICMS</p>
                                                 <input class="input_pequeno_alt" type="text" name="icms" 
                                                 value="<?php echo $linha['icms']; ?>" >
                                          </label>
                                   </div>

                            
                            <div class="buttons">
                                   <input class="button_crud" type="submit" value="Gravar">
                                   <input class="button_crud" type="reset" value="Voltar" onclick="history.back()">
                            </div>
                     </form>       
              </div>
       </div>
</div>

<script src="../../js/produto_photo.js" defer></script>