<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Caricacto</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css" href="./css/style.css">
        <link rel="icon" href="img/logopeq_caricacto.svg">
    </head>
    <body>
        <?php
            // na linha 24 e 25 as páginas ainda não estão feitas, mas coloquei o link das páginas de cadastro de user e produto, 
            // só pra facilitar na hora de programar        
            echo"
                
                <header id='header'>
                    <nav class='container'>
                        <a href='./index.php'><img src='./img/logo_final.svg' class='logo'></a>
                        <div class='menu'>
                            <ul class='grid'>
                                <li><a class='title' href='#topo'>Home</a></li>
                                <li><a class='title' href='./sobre.php'>Sobre</a></li>
                                <li><a class='title' href='./venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
                                <li><a class='title' href='./cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a></li>
                                <li><a class='title' href='./cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a></li>
                            </ul>
                        </div>
                        <a class='title' href='./venda/carrinho_front.php' target='_parent'><img class='icone_topo' src='./img/img_carrinhovazio.svg' ></a>
                        <a class='title'href='./login/login.html' target='_parent'><img class='icone_topo' src='./img/img_perfil.svg'></a>
                    </nav>
                </header>
                <main>
                    <div class='container_paginas' id='topo'>

                        <div class='section' id='home'>
                            <div class='text'>
                                <h1>
                                    Cactos e suculentas para seu jardim
                                </h1>
                                <p class='ai'>
                                    O Caricacto cuida de sua planta desde a sementinha, até a entrega em sua residência, com muito amor e carinho. Com produtos de excelente qualidade, iremos conquistar seu coração!
                                </p>
                                <a href='./venda/selecao_produtos_front.php' target='_parent' class='btn'>Ver produtos</a>
                            </div>
                            <div class='img'>
                                <img src='./img/img_topo.jpg' alt='imagem'>
                            </div>
                        </div>


                        <div class='divider-1'></div>
                        <div class='section' id='produtos'>
                            <div class='img_produto'>
                                <div class='alinhamento'>   
                                    <img src='./img/img_cacto1.jpg' alt='imagem'> 
                                    <p class='text_produtos_preco'>Suculenta</p>
                                    <p class='text_produtos_preco'>R$ 5.00</p> 
                                    <p class='text_produtos'> Com mini cactos e suculentas de diversas espécies, para todos os tipos de gosto. Confira nosssos produtos!</p>
                                    <a class='home_comprar' href='http://projetoscti.com.br/projetoscti24/Ecommerce/venda/selecao_detalhes_front.php?id_produto=1'>Comprar</a>
                                </div>
                            </div>


                    
                            <div class='img_produto'>
                                <div class='alinhamento'> 
                                    <img src='./img/img_cacto2.jpg' alt='imagem'> 
                                    <p class='text_produtos_preco'>Suculenta</p>
                                    <p class='text_produtos_preco'>R$ 5.00</p>
                                    <p class='text_produtos'>Como diferencial, são acompanhados com vasinhos 
                                        de bambu confeccionados por nós de forma sustentável e ecológica.</p>    
                                    <a class='home_comprar' href='http://projetoscti.com.br/projetoscti24/Ecommerce/venda/selecao_detalhes_front.php?id_produto=2'>Comprar</a>     
                                </div>
                            </div>

                            <div class='img_produto'>
                                <div class='alinhamento'>
                                    <img src='./img/img_cacto3.jpg' alt='imagem'>                                     
                                    <p class='text_produtos_preco'>Suculenta</p>
                                    <p class='text_produtos_preco'>R$ 5.00</p>   
                                    <p class='text_produtos'>Produtos selecionados especialmente para você, sendo cuidados diariamente com muita dedicação.</p> 
                                    <a  class='home_comprar' href='http://projetoscti.com.br/projetoscti24/Ecommerce/venda/selecao_detalhes_front.php?id_produto=3'>Comprar</a> 
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

            <footer>
                <img src='./img/logo.svg'>
                <div class='fusao'>
                    <div class='navegacao'>
                    
                    <p id='h'>Navegação:</p>
                    <a class='title' href='./index.php' target='_parent'>Home</a>
                    <a class='title'>Sobre</a>
                    <a class='title' href='./venda/selecao_produtos_front.php' target='_parent'>Produtos</a>
                    <a class='title' href='./cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a>
                    <a class='title' href='./cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a>
                </div>

                
                <div class='devs'>
                    <p class='title' id='h'>Desenvolvedores:</p>

                    <div class='devs1'>
                        <p>
                            04 - Beatriz Kaori Sakai <br>
                            05 - Beatriz Osajima Suwa <br>
                            13  - Eduarda Garbullio Silva <br>
                        </p>
                    </div>
                    <div class='devs2'>
                        <p>
                            24 - Lorena Fioruci Caricati dos Santos <br>
                            32 - Naydhow Roberto Mascareli Bertaglia <br>
                        </p>
                    </div>
                </div>
                </div>
            </footer>

            <a href='#topo' class='back-to-top'><img src='./img/voltar_topo.svg'></a>
            ";
        ?>

        <!--
            <div class='section' id='sobre'>
                <div class='img_sobre'>
                    <img src='./img/img_sobre.png' alt='imagem'>
                </div>
                <div class='text_sobre'>
                    <h2>Sobre nós</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolores distinctio facere laudantium ab possimus! Mollitia labore quia dicta voluptates culpa dolorem iure necessitatibus amet, illo hic sed veritatis ipsam.</p>
                    <p>Repellat, id? Natus a, adipisci autem at rerum mollitia officiis dolores quo harum sit quibusdam quam reiciendis fugiat, ab illum. Reprehenderit, libero dolores enim voluptate id perferendis nisi labore veritatis?</p>
                    <p>Quae quod ea quasi facere eveniet accusantium quos doloremque aspernatur esse impedit, adipisci quas distinctio? Adipisci perspiciatis in quisquam animi rem, unde voluptates laboriosam! Ratione illo quo necessitatibus fugit consequatur
                </div>
            </div>*/
        -->

        <script src="./js/main.js"></script>
    </body>
</html>