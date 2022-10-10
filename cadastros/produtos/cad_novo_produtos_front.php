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
        echo"
        <header id= 'header' >
        <nav class='container'>
            <a href='../../index.php'><img src='../../img/logo.svg' class='logo'></a>
            <div class='menu'>
                <ul class='grid'>
                    <li><a class='title' href='../../index.php' target='_parent'>Home</a></li>
                    <li><a class='title' href='../../sobre.php' target='_parent'>Sobre</a></li>
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
    ?>
    <div class="color_cadastros">
        <div class="container_paginas">
            
            <div class="alinha_tituloimg">
                <img class ="img_fofinhas" src="../../img/img_suculenta.svg">
                <p id="titulo_fofo_usu">Cadastro de Produtos</p>
                <img class ="img_fofinhas" src="../../img/img_cacto.svg">
            </div>
            
    
            <div class="form_cad_prod">             
                <form enctype="multipart/form-data" action="cad_novo_produtos_back.php" method="post">
                    <!-- <div class="campos"> -->

                        <div class="input-box">
                            <label>
                                <div class="campo_label">Nome</div>  
                                <input class="input_form_grande" type="text" name="nome"  placeholder="Nome" max/>
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <div class="campo_label">Descrição</div>
                                <input class="input_form_grande" type="text" name="descricao"  placeholder="Descrição"/>
                            </label>
                        </div>


                        <div class="input-box-imagem-prod">
                                <div class="campo_label_pequeno">Imagem</div>
                                    <div class="max-width-prod">
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
                                placeholder="Código Visual"/>
                            </label>
                        </div>
                    

                        <div class="input-box">
                            <label>
                                <div class="campo_label_pequeno">Estoque:</div>
                                <input class="input_form_pequeno" type="number" name="estoque" placeholder="Estoque" />
                            </label>
                        </div>

                       

                     
                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">Preço:</p>
                                <input class="input_form_pequeno" type="text" name="preco"  placeholder="Preço"/>
                            </label>
                        </div>


                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">Custo:</p>
                                <input class="input_form_pequeno" type="text" name="custo"  placeholder="Custo"/>
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">M. Lucro:</p>
                                <input class="input_form_pequeno" type="text" name="margem_lucro" placeholder="Margem lucro" />
                            </label>
                        </div>

                        <div class="input-box">
                            <label>
                                <p class="campo_label_pequeno">ICMS:</p>
                                <input class="input_form_pequeno" type="text" name="icms" placeholder="ICMS" />
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