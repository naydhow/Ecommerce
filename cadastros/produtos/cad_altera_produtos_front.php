<link rel="stylesheet" href="../../css/style.css">
<link rel="icon" href="../../img/logopeq_caricacto.svg">

<!-- Recuperando as informações do produto -->
<?php 
       include_once "../../utils/header_2.php";
      
      
       $id_produto =$_GET['id_produto'];
       include "cad_getinfo_produtos_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<div color="color_cadastros">
       <div class="container_paginas" id="topo">
              
            <div class="alinha_tituloimg">
                <img class ="img_fofinhas" src="../../img/img_suculenta.svg">
                <p id="titulo_fofo_usu">Alteração de Produtos</p>
                <img class ="img_fofinhas" src="../../img/img_cacto.svg">
            </div>

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
                                                 <div class="max-width-prod">
                                                        <div class="imageContainer">
                                                               <?php
                                                                      if($linha['campo_imagem'] != 'http://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/')
                                                                      {
                                                                             echo "<img src='".$linha['campo_imagem']."' alt='Selecione uma imagem para o produto' id='imgProduto'>";
                                                                      } else {
                                                                             echo "<img src='../../img/prd.jpg' alt='Selecione uma imagem para o produto' id='imgProduto'>";
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

  
<?php

       include_once "../../utils/footer_2.php";

?>

<script src="../../js/main.js"></script>

<script src="../../js/produto_photo.js"></script>