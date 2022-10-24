<?php

  session_start();

  // Usuário está logado???
  if(isset($_SESSION['usuariologado']))
  {
    $foto = $_SESSION['usuariologado']['img'];
    $botao = "<a href='./login/logout.php' target='_parent'>Logout </a>";
  }
  else 
  {
    $foto = './img/img_perfil.svg';
    $botao = "<a href='./login/login.html' target='_parent'>Login</a>";
  }

  if ($_SESSION['isadm'] =='t') {
    echo "
    <header id='header'>
      <nav class='container'>
        <a href='./index.php' target='_parent'><img src='./img/logo_final.svg' class='logo'></a>
        <div class='menu'>
            <ul class='grid'>
                <li><a class='title' href='./index.php' target='_parent'>Home</a></li>
                <li><a class='title' href='./sobre.php' target='_parent'>Sobre</a></li>
                <li><a class='title' href='./venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
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
            
            <div class='oggle icon-settings'><img class='icone_topo' src='./img/img_settings.svg'></div>
            <div class='configuration'>
              <div class='centraliza_config'>
                  <div class='configura'><a href='#estatisticas' alt='Estatísticas' title='Estatísticas'><img src='./img/img_statistics.svg'></a></div>
                  <div class='configura'><a href='./cadastros/usuarios/cad_pesq_usuarios_front.php' title='Usuários' alt='Usuários'><img src='./img/img_new_user.svg'></a></div>
                  <div class='configura'><a href='./cadastros/produtos/cad_pesq_produtos_front.php' title='Produtos' alt='Produtos'><img src='./img/img_new_item.svg'></a></div>
              </div>
            </div>

            <div class='toggle icon-carrinho'><img class='icone_topo' src='./img/img_carrinhovazio.svg'></div>
            <div class='toggle icon-close'><img class='icone_topo' src='./img/img_close.svg'></div>
              <div class='user'>
                  <div class='taggle icon-closer'><img class='icone_topo' src='./img/img_close.svg'></div>

                  <div class='dados'>
                    <div class='dados_user'>
                      <img class='' src='".$foto."'>
                      <label>".$_SESSION['usuariologado']['nome']."</label>
                      <label>".$_SESSION['usuariologado']['email']."</label>
                      <label>".$_SESSION['usuariologado']['cpf']."</label>
                      <label>".date('d/m/Y', strtotime($_SESSION['usuariologado']['data_nasc']))."</label>
                      <div class='button_alter'>
                        <a href='./cadastros/usuarios/cad_altera_usuarios_front.php?id_usuario=".$_SESSION['usuariologado']['id_usuario']."'> Alterar</a>&nbsp;
                        <a href='./cadastros/usuarios/cad_exclui_usuarios_front.php?id_usuario=".$_SESSION['usuariologado']['id_usuario']."'> Excluir</a>&nbsp;
                      </div>
                      <div class='button_user'>
                        ".$botao."
                      </div>
                    </div>
                  </div>
              </div>
            <div class='taggle icon-user'><img class='icone_topo_user' src='".$foto."'></div>
        </div>
      </nav>
    </header>
  ";
}

else if($_SESSION['usuariologado']){
  echo "
    <header id='header'>
      <nav class='container'>
        <a href='./index.php' target='_parent'><img src='./img/logo_final.svg' class='logo'></a>
        <div class='menu'>
            <ul class='grid'>
                <li><a class='title' href='./index.php' target='_parent'>Home</a></li>
                <li><a class='title' href='./sobre.php' target='_parent'>Sobre</a></li>
                <li><a class='title' href='./venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
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

            <div class='user'>
                  <div class='taggle icon-closer'><img class='icone_topo' src='./img/img_close.svg'></div>

                  <div class='dados'>
                    <div class='dados_user'>
                      <img class='imgimg' src='".$foto."'>
                      <label>".$_SESSION['usuariologado']['nome']."</label>
                      <label>".$_SESSION['usuariologado']['email']."</label>
                      <label>".$_SESSION['usuariologado']['cpf']."</label>
                      <label>".date('d/m/Y', strtotime($_SESSION['usuariologado']['data_nasc']))."</label>
                      <div class='button_alter'>
                        <a href='./cadastros/usuarios/cad_altera_usuarios_front.php?id_usuario=".$_SESSION['usuariologado']['id_usuario']."'> Alterar</a>&nbsp;
                        <a href='./cadastros/usuarios/cad_exclui_usuarios_front.php?id_usuario=".$_SESSION['usuariologado']['id_usuario']."'> Excluir</a>&nbsp;
                      </div>
                      <div class='button_user'>
                        ".$botao."
                      </div>
                    </div>
                 </div>
              </div>
              <div class='taggle icon-user'><img class='icone_topo_user' src='".$foto."'></div>
          </div>
        </nav>
      </header>
    ";

}
else
{
  echo "
    <header id='header'>
      <nav class='container'>
        <a href='./index.php' target='_parent'><img src='./img/logo_final.svg' class='logo'></a>
        <div class='menu'>
            <ul class='grid'>
                <li><a class='title' href='./index.php' target='_parent'>Home</a></li>
                <li><a class='title' href='./sobre.php' target='_parent'>Sobre</a></li>
                <li><a class='title' href='./venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
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

            <div class='user'>
                  <div class='taggle icon-closer'><img class='icone_topo' src='./img/img_close.svg'></div>

                  <div class='dados'>
                    <div class='dados_user'>
                      <img class='imgimg' src='".$foto."'>
                      <div class='button_user'>
                        ".$botao."
                      </div>
                    </div>
                 </div>
              </div>
              <div class='taggle icon-user'><img class='icone_topo_user' src='".$foto."'></div>
          </div>
        </nav>
      </header>
    ";
}
?>