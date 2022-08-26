<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Página Inicial</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css" href="./css/style.css">
    </head>
    <body>
        <?php
        
            echo"
                <div class='container'>
                    <div class='top-bar-container'>
                    <div class='top-bar-fixed'>
                        <div class='top-bar-content'>
                        <img  src='./img/logo_caricacto.png' width: '10px'>
                            <div class='top-bar-content-link'>
                                <a id='link' href='./index.php' target='_parent'>Página Inicial&nbsp;&nbsp;</a>
                                <a id='link' href='./cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos&nbsp;&nbsp;</a>
                                <a id='link' href='./cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários&nbsp;&nbsp;</a>
                                <a id='link' href='./venda/selecao_produtos_front.php' target='_parent'>Seleção</a>
                            </div>
                        </div>
                    </div>  
                    </div>
                </div>";
        ?>
    </body>
</html>