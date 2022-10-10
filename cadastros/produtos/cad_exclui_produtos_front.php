<link rel="stylesheet" href="../../css/style.css">
<link rel="icon" href="../../img/logopeq_caricacto.svg">

<?php
       echo"
       <header id='header'></header>"; 
       
       $id_produto = $_GET['id_produto'];
       include "cad_getinfo_produtos_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<div class="color_cadastros">
       <div class="container_paginas">
       
            <div class="alinha_tituloimg">
                <img class ="img_fofinhas" src="../../img/img_suculenta.svg">
                <p id="titulo_fofo_usu">Exclusão de Produtos</p>
                <img class ="img_fofinhas" src="../../img/img_cacto.svg">
            </div>

              <div class="alt_form_prod">
                     <form action="cad_exclui_produtos_back.php" method="post">

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label">Id do produto</p>
                                                 <input class="input_grande_alt" type="text" name="id_produto" 
                                                 value="<?php echo $linha['id_produto']; ?>" 
                                                 readonly>
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label">Nome</p>
                                                 <input class="input_grande_alt" type="text" name="nome" 
                                                 value="<?php echo $linha['nome']; ?>"
                                                 readonly>
                                          </label>
                                   </div>

                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label">Descrição</p>
                                                 <input class="input_grande_alt" type="text" name="descricao" 
                                                 value="<?php echo $linha['descricao']; ?>"
                                                 readonly>
                                          </label>
                                   </div>      
                                   

                                   <div class="input-box-imagem">
                                          <div>
                                                 <p class="campo_label_pequeno">Imagem</p>
                                                 <div class="max-width-prod">
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
                                          </div>
                                   </div>

                                   
                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">Estoque</p>
                                                 <input class="input_pequeno_alt" type="number" name="estoque" 
                                                 value="<?php echo $linha['estoque']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">Código Visual</p>
                                                 <input class="input_pequeno_alt" type="text" name="codigovisual" 
                                                 value="<?php echo $linha['codigovisual']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                 
                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">Preço</p>
                                                 <input class="input_pequeno_alt" type="text" name="preco" 
                                                 value="<?php echo $linha['preco']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">Custo</p>
                                                 <input class="input_pequeno_alt" type="text" name="custo" 
                                                 value="<?php echo $linha['custo']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   <div class="input-box">
                                          <label>
                                                 <p class="campo_label_pequeno">M. Lucro</p>
                                                 <input  class="input_pequeno_alt" type="text" name="margem_lucro" 
                                                 value="<?php echo $linha['margem_lucro']; ?>"
                                                 readonly>
                                          </label>
                                   </div>
                                   
                                   <div class="input-box">
                                          <label>
                                          <p class="campo_label_pequeno">ICMS</p>
                                                 <input  class="input_pequeno_alt" type="text" name="icms" 
                                                 value="<?php echo $linha['icms']; ?>"
                                                 readonly>
                                          </label>
                                   </div>

                            
                            <div class="buttons">
                                   <input class="button_crud" type="submit" value="Excluir">
                                   <input class="button_crud" type="button" value="Editar" onclick="location.href='cad_altera_produtos_front.php?id_produto=<?php echo $id_produto ?>';">
                                   <input class="button_crud" type="button" value="Voltar" onclick="location.href='cad_pesq_produtos_front.php';"> 
                            </div>
                     </form>       
              </div>
       </div>
</div>