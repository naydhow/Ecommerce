<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Caricacto</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css" href="./css/style.css">
        <link rel="icon" href="./img/cactoIni_final.svg">
    </head>
    <body>
        <?php

            include_once "./utils/header.php";
        
            echo"
                <main>
                    <div class='container_paginas' id='topo'>

                        <div class='section' id='home'>
                            <div class='text'>
                                <h1>
                                    Cactos e suculentas para seu jardim
                                </h1>
                                <p class='ai'>
                                    A Caricacto cuida de sua planta desde a sementinha, até a entrega em sua residência, com muito amor e carinho. Com produtos de excelente qualidade, iremos conquistar seu coração!
                                </p>
                                <a href='./venda/selecao_produtos_front.php' target='_parent' class='btn'>Ver produtos</a>
                            </div>
                            <div class='img'>
                                <img src='./img/plantinhas.jpg' alt='imagem'>
                            </div>
                        </div>


                        <div class='divider-1'></div>
                        <div class='section' id='produtos'>
                            <div class='img_produto'>
                                <div class='alinhamento'>   
                                    <img src='./img/cacto.jpg' alt='imagem'> 
                                    <p class='text_produtos_preco'>Cacto Tipo 1</p>
                                    <p class='text_produtos_preco'>R$ 4.00</p> 
                                    <p class='text_produtos'> Mini cactos e suculentas de diversas espécies, para todos os tipos de gosto. &nbsp;Adquira o seu!</p>
                                    <a class='home_comprar' href='http://projetoscti.com.br/projetoscti24/Ecommerce/venda/selecao_detalhes_front.php?id_produto=1'>Comprar</a>
                                </div>
                            </div>


                    
                            <div class='img_produto'>
                                <div class='alinhamento'> 
                                    <img src='./img/suculenta1.jpg' alt='imagem'> 
                                    <p class='text_produtos_preco'>Suculenta Tipo 1</p>
                                    <p class='text_produtos_preco'>R$ 4.00</p>
                                    <p class='text_produtos'>Como diferencial, são acompanhados com vasinhos 
                                        de juta confeccionados por nós de forma sustentável e ecológica.</p>    
                                    <a class='home_comprar' href='http://projetoscti.com.br/projetoscti24/Ecommerce/venda/selecao_detalhes_front.php?id_produto=3'>Comprar</a>     
                                </div>
                            </div>

                            <div class='img_produto_exc'>
                                <div class='alinhamento'>
                                    <img src='./img/suculenta3.jpg' alt='imagem'>                                     
                                    <p class='text_produtos_preco'>Mini cactos e suculentas precisam de cuidados especiais?</p>
                                    <p class='text_produtos'>Descubra os cuidados necessários para que essas plantinhas cresçam saudáveis e bonitas, acessando o site abaixo:</p> 
                                    <a  class='home_comprar' id='muda_cor' href='https://cactosesuculentas.com/como-cuidar-de-suculentas/' target='_blank'>Cuidados</a> 
                                </div> 
                            </div>

                        </div>


                        <div class='divider-2'></div>

                        <div class='section' id='video'>
                            <div class='textinho'>
                                <p>Ao lado, deixamos um vídeo de cuidados com essas plantinhas para que elas cresçam de forma saudável e deixem seu jardim ou ambiente lindo.</p>
                            </div>
                            <div class='vid'>
                                <iframe width='660' height='415' src='https://www.youtube.com/embed/QUI7XkK3Z1g' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </main>
            ";
            include_once "./utils/footer.php";
        ?>
        <script src="./js/main.js"></script>
    </body>
</html>