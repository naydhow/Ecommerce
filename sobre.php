<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Sobre</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css" href="./css/style.css">
        <link rel="icon" href="img/logopeq_caricacto.svg">
    </head>
    <body>
        <?php       
            echo"
                
                <header id='header'>
                    <nav class='container'>
                        <a href='./index.php'><img src='./img/logo.svg' class='logo'></a>
                        <div class='menu'>
                            <ul class='grid'>
                                <li><a class='title' href='./index.php'>Home</a></li>
                                <li><a class='title' href='#topo'>Sobre</a></li>
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

                    <div class='section' id='sobre'>
                        
                        <div class='sobre_titulo'>
                            <h1> Conheça um pouco sobre nós...</h1>
                        </div>

                        <div class='img_sobre'>
                            <img src='./img/img_sobre.jpg'>
                        </div>
                </div>

                <div class='sobre_textao'>
                    
                    <p>O Caricacto foi desenvolvido a partir de um projeto e-commerce, correspondente ao curso de Informática, do Colégio Técnico Industrial (CTI), da Unesp de Bauru. Através desse projeto, nossas
                    vendas serão realizadas pelo site, sendo retiradas, presencialmente, na Semana do Colégio. 
                    </p>

                    <p>O projeto, o qual também é uma startup, está voltado para o comércio de mini cactos e suculentas, a fim de proporcionar lembranças para que você, nosso consumidor, decore sua casa ou
                    presenteie quem ama. Nossos produtos chegam através de nosso fornecedor e posteriormente são cuidados e preparados, com vasinhos sustentáveis de bambu e lindas embalagens. Esperamos trazer
                    uma grande satisfação aos nossos consumidores e disseminar, através de nossas sementes de brinde, um mundo mais sustentável como mais árvores e amor florescendo.
                    </p>

                    <p>Contribua para um futuro mais sustentável. Seja um consumidor Caricacto!</p>

               </div>


                <div class='divider-1'></div>
                    <div class='section_sobre'>
                        <div class='sobre_Devs'>
                            <h1>Equipe Caricacto</h1>
                        </div>

                        <div class='integrantes'>
                            <div class='info_sobre'>

                                <div class='img_integrantes'>
                                    <img src='./img/bia_osajima.jpg'>
                                </div>

                                <div class='sobre_integrantes'>
                                    <p>04 - Beatriz Kaori Sakai</p>
                                    <p>E-mail: kaori.sakai@unesp.br</p>
                                </div>

                            </div>
                        </div>

                        <div class='integrantes'>
                            <div class='info_sobre'>

                                <div class='img_integrantes'>
                                    <img src='./img/bia_osajima.jpg'>
                                </div>

                                <div class='sobre_integrantes'>
                                    <p>05 - Beatriz Osajima Suwa</p>
                                    <p>E-mail: beatriz.suwa@unesp.br</p>
                                </div>

                            </div>
                        </div>

                        
                        <div class='integrantes'>
                            <div class='info_sobre'>
                                <div class='img_integrantes'>
                                    <img src='./img/eduarda.jpg'>
                                </div>

                                <div class='sobre_integrantes'>
                                    <p>13 - Eduarda Garbullio Silva</p>
                                    <p>E-mail: eduarda.garbullio@unesp.br</p>
                                </div>
                            </div>
                        </div>

                        <div class='integrantes'>
                            <div class='info_sobre'>
                                <div class='img_integrantes'>
                                    <img src='./img/eduarda.jpg'>
                                </div>

                                <div class='sobre_integrantes'>
                                    <p>24 - Lorena Fioruci Caricati dos Santos</p>
                                    <p>E-mail: lorena.caricati@unesp.br</p>
                                </div>
                            </div>
                        </div>

                        <div class='integrantes'>
                            <div class='info_sobre'>
                                <div class='img_integrantes'>
                                    <img src='./img/naldo.jpeg'>
                                </div>

                                <div class='sobre_integrantes'>
                                    <p>32 - Naydhow Roberto Mascareli Bertaglia</p>
                                    <p>E-mail: naydhow.bertaglia@unesp.br</p>
                                <div>
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