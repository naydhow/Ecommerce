<link rel="stylesheet" href="../../css/style.css">
<link rel="icon" href="../../img/logopeq_caricacto.png">

<?php
       echo"
       <header id= 'header' >
              <nav class='container'>
              <a  class='logo' href='../../index.php'><img src='../../img/logo_caricacto.png'></a>
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
      
       $id_produto = $_GET['id_produto'];
       include "cad_getinfo_produtos_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<div class="cadastro_produtos">
       <p id="cad_titulo">Confirmação: Exclusão de Produtos</p>

       <div class="cad_form_prod">
              <form action="cad_exclui_produtos_back.php" method="post">
                     <div class="input-group">
                            <div class="input-box">
                                   <label>
                                          <strong>Id do produto</strong><br>
                                          <input type="text" name="id_produto" 
                                          value="<?php echo $linha['id_produto']; ?>" 
                                          readonly>
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Nome</strong><br>
                                          <input type="text" name="nome" 
                                          value="<?php echo $linha['nome']; ?>"
                                          readonly>
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Descrição</strong><br>
                                          <input type="text" name="descricao" 
                                          value="<?php echo $linha['descricao']; ?>"
                                          readonly>
                                   </label>
                            </div>       
                            <div class="input-box">
                                   <label>
                                          <strong>Estoque</strong><br>
                                          <input type="number" name="estoque" 
                                          value="<?php echo $linha['estoque']; ?>"
                                          readonly>
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Código Visual</strong><br>
                                          <input type="text" name="codigovisual" 
                                          value="<?php echo $linha['codigovisual']; ?>"
                                          readonly>
                                   </label>
                            </div>
                            <div class="input-box">
                                   <div>
                                          <strong>Imagem</strong><br>
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
                                   </div>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Preço</strong><br>
                                          <input type="text" name="preco" 
                                          value="<?php echo $linha['preco']; ?>"
                                          readonly>
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Custo</strong><br>
                                          <input type="text" name="custo" 
                                          value="<?php echo $linha['custo']; ?>"
                                          readonly>
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>Margem de Lucro</strong><br>
                                          <input type="text" name="margem_lucro" 
                                          value="<?php echo $linha['margem_lucro']; ?>"
                                          readonly>
                                   </label>
                            </div>
                            <div class="input-box">
                                   <label>
                                          <strong>ICMS</strong><br>
                                          <input type="text" name="icms" 
                                          value="<?php echo $linha['icms']; ?>"
                                          readonly>
                                   </label>
                            </div>
                     </div>

                     
                     <div class="buttons">
                            <div>
                                   <input id="conf_exclusao" type="submit" value="Confirma exclusão">
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div>
                                   <input id="editar" type="button" value="Editar" onclick="location.href='cad_altera_produtos_front.php?id_produto=<?php echo $id_produto ?>';">
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div>
                                   <input id="exclui_voltar" type="button" value="Voltar" onclick="location.href='cad_pesq_produtos_front.php';"> 
                            </div>
                     </div>
              </form>       
       </div>
</div>