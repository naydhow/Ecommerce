<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Estatísticas</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css" href="./css/style.css">
        <link rel="icon" href="./img/cactoIni_final.svg">
    </head>
    <body>
        <?php

            include_once "./utils/header.php";

           echo  "<div class='container_paginas'>

                <div class='alinha_tituloimg'>
                    <img class='img_fofinhas' src='./img/img_suculenta.svg'>
                    <p id='titulo_fofo_usu'>&nbsp;&nbsp;Estatísicas</p>
                    <img class='img_fofinhas' src='./img/img_cacto.svg'>
                </div>


                    <div class='template'>

                        <div class='estatisticas'>
                            <div class='info_sobre'>

                                <div class='estatisticas_img'>
                                <img src='./img/mov_caixa.jpg'>
                                </div>

                                <div class='estatisticas_text'>
                                    <b><p>Movimentação do Caixa</p></b>
                                    <br>
                                    <p>Outubro de 2022</p>
                                    <br>
                                    <br>
                                    <a class='button_estatistica' href='./docs_jovita/movimentacao_caixa.pdf' target='_blank'>Visualizar</a>
                                </div>

                            </div>
                        </div>

                        <div class='estatisticas'>
                            <div class='info_sobre'>

                                <div class='estatisticas_img'>
                                  <img src='./img/mov_estoque_s1.jpg'>
                                </div>

                                <div class='estatisticas_text'>
                                    <b><p>Movimento do Estoque</p></b>
                                    <p>Suculenta Tipo 1</p>
                                    <p>Outubro de 2022</p>
                                    <br>
                                    <br>
                                    <a class='button_estatistica' href='./docs_jovita/mov_estoque_s1.pdf' target='_blank'>Visualizar</a>
                                </div>

                            </div>
                        </div>


                        <div class='estatisticas'>
                            <div class='info_sobre'>

                                <div class='estatisticas_img'>
                                <img src='./img/mov_estoque_s2.jpg'>
                                </div>

                                <div class='estatisticas_text'>
                                    <b><p>Movimento do Estoque</p></b>
                                    <p>Suculenta Tipo 2</p>
                                    <p>Outubro de 2022</p>
                                    <br>
                                    <br>
                                    <a class='button_estatistica' href='./docs_jovita/mov_estoque_s2.pdf' target='_blank'>Visualizar</a>
                                </div>

                            </div>
                        </div>


                        <div class='estatisticas'>
                            <div class='info_sobre'>

                                <div class='estatisticas_img'>
                                <img src='./img/mov_estoque_c1.jpg'>
                                </div>

                                <div class='estatisticas_text'>
                                    <b><p>Movimento do Estoque</p></b>
                                    <p>Cacto Tipo 1</p>
                                    <p>Outubro de 2022</p>
                                    <br>
                                    <br>
                                    <a class='button_estatistica' href='./docs_jovita/mov_estoque_c1.pdf' target='_blank'>Visualizar</a>
                                </div>

                            </div>
                        </div>


                        <div class='estatisticas'>
                            <div class='info_sobre'>

                                <div class='estatisticas_img'>
                                <img src='./img/mov_estoque_c2.jpg'>
                                </div>

                                <div class='estatisticas_text'>
                                    <b><p>Movimento do Estoque</p></b>
                                    <p>Cacto Tipo 2</p>
                                    <p>Outubro de 2022</p>
                                    <br>
                                    <br>
                                    <a class='button_estatistica' href='./docs_jovita/mov_estoque_c2.pdf' target='_blank'>Visualizar</a>
                                </div>

                            </div>
                        </div>


                        <div class='estatisticas'>
                            <div class='info_sobre'>

                                <div class='estatisticas_img'>
                                <img src='./img/mov_estoque_c2.jpg'>
                                </div>

                                <div class='estatisticas_text'>
                                    <b><p>Documento Startup</p></b>
                                    <p>Trabalho - Gestão de Negócios</p>
                                    <p>2022</p>
                                    <br>
                                    <br>
                                    <a class='button_estatistica' href='./docs_jovita/mov_estoque_c2.pdf' target='_blank'>Visualizar</a>
                                </div>

                            </div>
                        </div>

                        
                    </div>

                </div>"
                
            ;

            include "./utils/footer.php";
        ?>
            
            
            <script src="./js/main.js"></script>
    </body>
</html>