<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Usuários</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../img/logopeq_caricacto.svg">
    </head>
    <body>

    <?php
       echo"
       <header id= 'header' >
           <nav class='container'>
               <a  class='logo' href='../../index.php'><img src='../../img/logo.svg'></a>
               <div class='menu'>
                   <ul class='grid'>
                       <li><a class='title' href='../../index.php' target='_parent'>Home</a></li>
                       <li><a class='title' href='../../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos</a></li>
                       <li><a class='title' href='../../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a></li>
                       <li><a class='title' href='../../venda/selecao_produtos_front.php' target='_parent'>Seleção</a></li>
                   </ul> 
               </div>
               <div class='toggle icon-menu'></div>
               <div class='toggle icon-close'></div>
           </nav>
       </header>"
    ?>
    <div class="container_paginas">
    <div class="pesq">
        <div class="pesquisa">
            <form action="" method="post">
            <div class="divisoes">
                <div class="pesquisaBotao">
                    <button>
                        <img src="../../img/search.svg" alt="Lupa de Pesquisa">
                    </button>
                </div>
                <div class="pesquisaTexto">
                    <input type="text" name="textPesquisa" placeholder="Pesquise um usuário especifico" maxlength="116">
                </div>
            </div>
            </form>
      </div>
    </div>

      <a class="links" href='cad_novo_usuarios_front.php'>+ Adicionar Usuário</a><br><br>

        <?php
            include "cad_pesq_usuarios_back.php";

            if ($qtde == 0) {
                echo "Não foi encontrado nenhum usuario !!!<br><br>";
                return;
            }

            // Começar tabela e criar o cabeçalho
            echo "
            <div class='tabela'>
                <div class='fileira'>
                    <div class='cell cellPeq cellHeader'>
                        <b>Id</b>
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        <b>Imagem</b>
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        <b>Nome</b>
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        <b>Telefone</b>
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        <b>E-mail</b>
                    </div>                    
                    <div class='cell cellMenor cellHeader'>
                        <b>Alterar</b>
                    </div>
                    <div class='cell cellMenor cellHeader'>
                        <b>Excluir</b>
                    </div>
                </div>
                ";

                // Criar linhas com os dados dos produtos
                foreach ($resultado_lista as $linha)
                {
                    echo "
                    <div class='row'>
                        <div class='cell cellPeq'>
                            ".$linha['id_usuario']."
                        </div>
                        <div class='cell cellEnormeImg'>
                            ".'<img src="'.$linha['img'].'">'."
                        </div>
                        <div class='cell cellEnorme'>
                            ".$linha['nome']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['telefone']."
                        </div>
                        <div class='cell cellEnorme'>
                            ".$linha['email']."
                        </div>
                        <div class='cell cellMenor'>
                             <a class='cellMenor' href='cad_altera_usuarios_front.php?id_usuario=".$linha['id_usuario']."'> Alterar</a>&nbsp;
                        </div>
                        <div class='cell cellMenor'>
                            <a  class='cellMenor' href='cad_exclui_usuarios_front.php?id_usuario=".$linha['id_usuario']."'> Excluir</a>&nbsp;
                        </div>
                    </div> 
                    "; 
                } 
            // Fechando a tag da tabela
            echo "</div>";
        ?>    
    </div>
    
    </body>
</html>