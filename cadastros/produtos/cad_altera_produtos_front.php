<link rel="stylesheet" href="../../css/style.css">
<link rel="icon" href="../../img/logopeq_caricacto.svg">

<!-- Recuperando as informações do produto -->
<?php 
       include_once "../../utils/header_2.php";
      
      
       $id_produto =$_GET['id_produto'];
       include "cad_getinfo_produtos_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->

<div>
        <div class="alinha_tituloimg">
            <img class="img_fofinhas" src="../../img/img_suculenta.svg">
            <p id="titulo_fofo_usu">&nbsp;&nbsp; Alteração de Produtos</p>
            <img class="img_fofinhas" src="../../img/img_cacto.svg">
        </div>

        <div class="borda_fora_form">
            <ul>
                <li>
                    <div id="lado1_form">
                        <form action="cad_altera_produtos_back.php" enctype="multipart/form-data" method="post">
                            <br> <br><br>
                            <div class="input-box-imagem">
                                          <div>
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
                            <br><br>

                            <div>
                                <strong class="textos">ID PRODUTO:</strong>
                                <input type="text" name="id_produto" value="<?php echo $linha['id_produto']; ?>" readonly class="resposta">
                            </div>
                            <br> <br><br>

                            <div>
                                <strong class="textos">NOME:  &nbsp; &nbsp; &nbsp;</strong>
                                <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" class="resposta">
                            </div>
                            <br> <br><br>
                            <div>
                                <strong class="textos">DESCRIÇÃO</strong>
                                <input class="resposta" type="text" name="descricao" value="<?php echo $linha['descricao']; ?>">
                            </div>
                            <br> <br><br>
                            <div>
                                <strong class="textos">COD. VISUAL:</strong>
                                <input type="text" name="codigovisual" value="<?php echo $linha['codigovisual']; ?>" class="resposta">
                            </div>
                            <br> <br><br>
                            <div>
                                <strong class="textos">ESTOQUE: </strong>
                                <input type="number" name="estoque" value="<?php echo $linha['estoque']; ?>" class="resposta">
                            </div>
                                <br><br> <br>

                            <div>
                                <strong class="textos">PREÇO:  &nbsp; &nbsp;</strong>
                                <input type="text" name="preco" value="<?php echo $linha['preco']; ?>" class="resposta">
                            </div>
                                <br><br><br>

                            <div>
                                <strong class="textos">CUSTO: &nbsp; &nbsp;</strong>
                                <input type="text" name="custo" value="<?php echo $linha['custo']; ?>" class="resposta">
                            </div>
                            <br><br><br>

                            <div>
                                <strong class="textos">M. LUCRO: </strong>
                                <input type="text" name="margem_lucro" value="<?php echo $linha['margem_lucro']; ?>" class="resposta">
                            </div>
                            <br> <br><br>
                            <div>
                                <strong class="textos">ICMS: &nbsp; &nbsp; &nbsp; &nbsp;</strong>
                                <input type="text" name="icms" value="<?php echo $linha['icms']; ?>" class="resposta">
                            </div>
                            <br> 
                            
                            <div>
                                <input type="submit" value="Gravar" class="btn_enviar">
                                <input type="reset" value="Voltar" onclick="history.back()" class="btn_enviar">
                            </div>
                </form>
            </li>

            <li>
                    <!--  LADO 2 -->
                    <br>
                    <div id="lado2_form">
                        <div class="borda_rosa">
                            <br><br>
                            <img class="img_form" src="../../img/cacto_login.svg">
                            <br> <br><br> <br>
                            <img class="img_form" src="../../img/vaso_redondo_mini.svg">
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

  
<?php

       include_once "../../utils/footer_2.php";

?>

<script src="../../js/main.js"></script>

<script src="../../js/produto_photo.js"></script>