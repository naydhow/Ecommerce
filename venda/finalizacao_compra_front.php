<?php
    echo"                
    <header id='header'>
        <nav class='container'>
                <a href='../index.php'><img src='../img/logo.svg' class='logo'></a>
                <div class='menu'>
                        <ul class='grid'>
                                <li><a class='title' href='../index.php'>Home</a></li>
                                <li><a class='title'>Sobre</a></li>
                                <li><a class='title' href='../venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
                                <li><a class='title' href='../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a></li>
                                <li><a class='title' href='../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a></li>
                        </ul>
                </div>
                <a class='title' href='../venda/carrinho_front.php' target='_parent'><img class='icone_topo' src='../img/img_carrinhovazio.svg' ></a>
                <a class='title'href='../login/login.html' target='_parent'><img class='icone_topo' src='../img/img_perfil.svg'></a>
        </nav>
    </header>
    ";

    //session_start();
    $idusuario = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "finalizacao_compra_back.php";

    echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
?>

<a href="selecao_produtos_front.php">Voltar</a>