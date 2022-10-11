<?php

  echo "
    <header id='header'>
      <nav class='container'>
        <a href='./index.php' target='_parent'><img src='./img/logo_final.svg' class='logo'></a>
        <div class='menu'>
            <ul class='grid'>
                <li><a class='title' href='./index.php' target='_parent'>Home</a></li>
                <li><a class='title' href='./sobre.php' target='_parent'>Sobre</a></li>
        <a href='#'><img src='./img/logo_final.svg' class='logo'></a>
        <div class='menu'>
            <ul class='grid'>
                <li><a class='title' href='#topo'>Home</a></li>
                <li><a class='title' href='./sobre.php'>Sobre</a></li>
                <li><a class='title' href='./venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
                <li><a class='title' href='./cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a></li>
                <li><a class='title' href='./cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a></li>
            </ul>
        </div>
        <div class='divisao-menu'>
            <div id='blur'></div>
            <div class='carrinho'>
                <iframe src='./venda/carrinho_peq_front.php' id='iframers'></iframe>

                <div class='divider-black'></div>
                <footer id='footer_cart'>
                    <div class='buttons_cart'>
                        <a href='./venda/selecao_produtos_front.php' id='opcoes'>Continuar Comprando</a>
                        <a href='./venda/confirmacao_compra_front.php' id='opcoes'>Finalizar</a>
                        <a href='./venda/carrinho_front.php' id='opcoes'>Carrinho</a>
                    </div>
                </footer>
            </div>
            <div class='toggle icon-carrinho'><img class='icone_topo' src='./img/img_carrinhovazio.svg'></div>
            <div class='toggle icon-close'><img class='icone_topo' src='./img/img_close.svg'></div>
            <a class='title'href='./login/login.html' target='_parent'><img class='icone_topo' src='./img/img_perfil.svg'></a>
        </div>
      </nav>
    </header>
  ";

?>

<!-- <div class='preco-total'>
  <span><b>Total:</b></span>
  <span><b>R$ ".number_format($total, 2, ',', '.')."</b></span>
</div> -->