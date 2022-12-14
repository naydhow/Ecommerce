<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/cactoIni_final.svg">
    
    <title>Cadastro de Produtos</title>
</head>
<body>

    <?php
         include_once "../../utils/header_2.php";

         if($_SESSION['isadm'] == 't') {
    ?>

<div class="section">
    <div class="central">
        <div class="alinha_tituloimg">
            <img class="img_fofinhas" src="../../img/img_suculenta.svg">
            <p id="titulo_fofo_usu">&nbsp;&nbsp; Cadastro de Produtos</p>
            <img class="img_fofinhas" src="../../img/img_cacto.svg">
        </div>

        <div class="borda_fora_form_Prod">
            <ul>
                <li id="form1">
                    <div id="lado1_form">
                        <form enctype="multipart/form-data" action="cad_novo_produtos_back.php" method="post">
                            <br>
                        <div class="input-box-imagem-prod">
                                <div class="max-width-prod">
                                    <div class="imageContainer" id="margem_img_cam">
                                        <img src="../../img/camera.svg" alt="Selecione uma imagem para o produto" id="imgProduto">
                                    </div>
                                </div>
                                <div class="answer">
                                    <input name="ftproduto" id="ftproduto" type="file" accept="image/*">
                                </div>
                        </div>

                            <br><br>

                            <div>
                                <strong class="textos">NOME</strong>
                                <input type="text" name="nome"  placeholder="Nome" max required class="resposta">
                            </div>
                            <br> <br><br>
                            <div>
                                <strong class="textos">DESCRIÇÃO</strong>
                                <input class="resposta" type="text" name="descricao"  placeholder="Descrição"/>
                            </div>
                            <br> <br><br>
                            <div>
                                <strong class="textos">COD. VISUAL</strong>
                                <input type="text" name="codigovisual" maxlength="13" placeholder="Código Visual" required class="resposta">
                            </div>
                            <br> <br><br>
                            <div>
                                <strong class="textos">ESTOQUE</strong>
                                <input type="number" name="estoque" placeholder="Estoque" required class="resposta">
                            </div>
                                <br><br> <br>

                            <div>
                                <strong class="textos">PREÇO</strong>
                                <input type="text" name="preco"  placeholder="Preço" required class="resposta">
                            </div>
                                <br><br><br>

                            <div>
                                <strong class="textos">CUSTO</strong>
                                <input type="text" name="custo"  placeholder="Custo" required class="resposta">
                            </div>
                            <br><br><br>

                            <div>
                                <strong class="textos">MARGEM DE LUCRO</strong>
                                <input type="text" name="margem_lucro" placeholder="Margem lucro" required class="resposta">
                            </div>
                            <br> <br><br>
                            <div>
                                <strong class="textos">ICMS</strong>
                                <input type="text" name="icms" placeholder="ICMS" required class="resposta">
                            </div>
                            <br>

                            <div>
                                <input type="submit" name="button" value="Enviar" class="btn_enviar">
                            </div>
                            <div class="voltarr">
                                <a href="./cad_pesq_produtos_front.php">Voltar</a>
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
                    </div>
                </li>
            </ul>

        </div>
    </div> 
</div>   
   
    <?php
    }
    else
    {
        echo "<div>";
        echo "  <div class='section_none'>";
        echo "      <span>Você não possui permissão para acessar este local.</span>";
        echo "      <span><b>Contate aos administradores do site.</b></span>";
        echo "  </div>";
        echo "</div>";
    }

    include_once "../../utils/footer_2.php";
?>
    
    <script src="../../js/main.js"></script>
    <script src="../../js/produto_photo.js"></script>
</body>
</html>