<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/logopeq_caricacto.svg">
    
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
</head>
<body>
    <?php
        // echo"
        // <header id='header'></header>"; 
    ?>
    <div class="color_cadastros">
        <div class="container_paginas_princ">
            <div class="titulo">
                <!--<img class ="img_titulo" src="../../img/cacto.png">-->
                <p class="cadastro_titulos">Cadastre-se na loja</p>
                <!--<img class ="img_titulo" src="../../img/cacto.png">-->
            </div>
            
    
            <div class="form_cad_prod">             
                <form enctype="multipart/form-data" action="cad_novo_produtos_back.php" method="post">
                    <!-- <div class="campos"> -->

                        <div class="input-box">
                            <label>
                                <div class="campo_label">Nome:</div>  
                                <input class="input_form_grande" type="text" name="nome"  placeholder="Nome" max required/>
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <div class="campo_label">Descrição:</div>
                                <input class="input_form_grande" type="text" name="descricao"  placeholder="Descrição" required/>
                            </label>
                        </div>


                        <div class="input-box-imagem">
                                <p class="campo_label_pequeno">Imagem:</p>
                                    <div class="max-width">
                                        <div class="imageContainer">
                                            <img src="../../img/camera.svg" alt="Selecione uma imagem para o produto" id="imgProduto">
                                        </div>
                                    </div>
                                    <div class="answer">
                                        <input name="ftproduto" id="ftproduto" type="file" accept="image/*">
                                    </div>
                        </div>


                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">Cod. Visual:</p>
                                <input  class="input_form_pequeno" type="text" name="codigovisual" maxlength="13" 
                                placeholder="Código Visual" required/>
                            </label>
                        </div>
                    

                        <div class="input-box">
                            <label>
                                <div class="campo_label_pequeno">Estoque:</div>
                                <input class="input_form_pequeno" type="number" name="estoque" placeholder="Estoque" required/>
                            </label>
                        </div>

                       

                     
                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">Preço:</p>
                                <input class="input_form_pequeno" type="text" name="preco"  placeholder="Preço" required/>
                            </label>
                        </div>


                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">Custo:</p>
                                <input class="input_form_pequeno" type="text" name="custo"  placeholder="Custo" required/>
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">M. Lucro:</p>
                                <input class="input_form_pequeno" type="text" name="margem_lucro" placeholder="Margem lucro" required/>
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">ICMS:</p>
                                <input class="input_form_pequeno" type="text" name="icms" placeholder="ICMS" required/>
                            </label>
                        </div>
                   
                    <div class="buttons">
                        <input type="submit" name="button" class="button_crud" value="Enviar"/>
                        <a class="button_crud" href='cad_pesq_produtos_front.php'>Voltar</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
    <script src="../../js/produto_photo.js"></script>
</body>
</html>