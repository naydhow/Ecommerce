<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Página Inicial</title>
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
                <header id= 'header' >
                    <nav class='container'>
                        <a href='./index.php'><img src='./img/logo.svg' class='logo'></a>
                        <div class='menu'>
                            <ul class='grid'>
                                <li><a class='title' href='./index.php' target='_parent'>Home</a></li>
                                <li><a class='title'>Sobre</a></li>
                                <li><a class='title' href='./venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
                                <li><a class='title' href='./cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a></li>
                                <li><a class='title' href='./cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a></li>
                            </ul>
                        </div>
                        <a class='title' href='./venda/carrinho_front.php' target='_parent'><img class='icone_topo' src='./img/img_carrinhovazio.svg' ></a></li>
                        <a class='title'href='./login/login.html' target='_parent'><img class='icone_topo' src='./img/img_perfil.svg'></a></li>
                        <div class='toggle icon-menu'></div>
                        <div class='toggle icon-close'></div>
                    </nav>
                </header>
                <main>
                    <div class='container_paginas'>
                        <div class='section' id='home'>
                            <div class='text'>
                                <h1>
                                    Cactos e suculentas para seu jardim
                                </h1>
                                <p class='ai'>
                                    O Caricacto cuida de sua planta desde da sementinha, até a entrega em sua residência, com muito amor e carinho. Com produtos de excelente qualidade, já conquistou clientes de todo o país.
                                </p>
                                <a href='./venda/selecao_produtos_front.php' target='_parent' class='btn'>Ver produtos</a>
                            </div>
                            <div class='img'>
                                <img src='./img/img_topo.png' alt='imagem'>
                            </div>
                        </div>

                        <div class='section' id='produtos'>
                            <div class='img_produto'>
                                <img src='./img/img_cacto1.jpg' alt='imagem'>
                                <p class='text'> Com mini cactos e suculentas de diversas espécies, para todos os tipos de gosto .</p>
                            </div>
                            <div class='img_produto'>
                                <img src='./img/img_cacto2.png' alt='imagem'>
                            </div>
                            <div class='img_produto'>
                                <img src='./img/img_cacto3.png' alt='imagem'>
                            </div>
                                        
                                        
                        </div>
                    </div>
                </main>
                ";
        ?>!</p>

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
    </body>
</html>