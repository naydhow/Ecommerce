<link rel="stylesheet" href="../../css/style.css">
<link rel="icon" href="../../img/cactoIni_final.svg">
<title>Alteração de Produtos</title>

<!-- Recuperando as informações do produto -->
<?php 
       include_once "../../utils/header_2.php";
      
    //    session_start()

    //     if($_SESSION['isadm'] == 't') {
       $id_produto =$_GET['id_produto'];
       include "cad_getinfo_produtos_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->

<div class="section">
    <div class="central">
        <div class="alinha_tituloimg">
            <img class="img_fofinhas" src="../../img/img_suculenta.svg">
            <p id="titulo_fofo_usu">&nbsp;&nbsp; Alteração de Produtos</p>
            <img class="img_fofinhas" src="../../img/img_cacto.svg">
        </div>

        <div class="borda_fora_form_Prod">
            <ul>
                <li id="form1">
                    <div id="lado1_form">
                        <form action="cad_altera_produtos_back.php" enctype="multipart/form-data" method="post">
                            <br> <br>
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
                                <strong class="textos">ID PRODUTO</strong>
                                <input type="text" name="id_produto" value="<?php echo $linha['id_produto']; ?>" readonly class="resposta">
                            </div>
                            <br> <br>

                            <div>
                                <strong class="textos">NOME</strong>
                                <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" class="resposta">
                            </div>
                            <br> <br>
                            <div>
                                <strong class="textos">DESCRIÇÃO</strong>
                                <input class="resposta" type="text" name="descricao" value="<?php echo $linha['descricao']; ?>">
                            </div>
                            <br> <br>
                            <div>
                                <strong class="textos">CÓDIGO VISUAL</strong>
                                <input type="text" name="codigovisual" value="<?php echo $linha['codigovisual']; ?>" class="resposta">
                            </div>
                            <br> <br>
                            <div>
                                <strong class="textos">ESTOQUE</strong>
                                <input type="number" name="estoque" value="<?php echo $linha['estoque']; ?>" class="resposta">
                            </div>
                                <br><br> 

                            <div>
                                <strong class="textos">PREÇO</strong>
                                <input type="text" name="preco" value="<?php echo $linha['preco']; ?>" class="resposta">
                            </div>
                                <br><br>

                            <div>
                                <strong class="textos">CUSTO</strong>
                                <input type="text" name="custo" value="<?php echo $linha['custo']; ?>" class="resposta">
                            </div>
                            <br><br>

                            <div>
                                <strong class="textos">MARGEM DE LUCRO</strong>
                                <input type="text" name="margem_lucro" value="<?php echo $linha['margem_lucro']; ?>" class="resposta">
                            </div>
                            <br> <br>
                            <div>
                                <strong class="textos">ICMS</strong>
                                <input type="text" name="icms" value="<?php echo $linha['icms']; ?>" class="resposta">
                            </div>
                          
                            <div class="espaco_button">
                                <input type="submit" value="Gravar" class="btn_enviar">
                                <input type="reset" value="Voltar" onclick="history.back()" class="btn_enviar">
                            </div>
                </form>
            </li>

            <li>
                    <!--  LADO 2 -->
                    <br>
                    <div id="lado2_form">
                        <div class="borda_rosa_Prod">
                        <br><br><br>
                        <img class="img_form" src="../../img/suculenta_alta.jpg">
                        <br><br><br><br><br><br><br><br>
                        <img class="img_form" src="../../img/cacto_fino.jpg">
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>

  
<?php
    // }
    // else
    // {
    //     echo "<div>";
    //     echo "  <div class='section_none'>";
    //     echo "      <span>Você não possui permissão para acessar este local.</span>";
    //     echo "      <span><b>Contate aos administradores do site.</b></span>";
    //     echo "  </div>";
    //     echo "</div>";
    // }

    include_once "../../utils/footer_2.php";
?>

<script src="../../js/main.js"></script>

<script src="../../js/produto_photo.js"></script>