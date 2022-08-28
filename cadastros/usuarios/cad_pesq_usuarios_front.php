<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Usuários</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../img/logopeq_caricacto.png">
    </head>
    <body>

    <?php
        
        echo"
            <div class='container'>
                <div class='top-bar-container'>
                <div class='top-bar-fixed'>
                    <div class='top-bar-content'>
                    <a href='../../index.php'><img  src='../../img/logo_caricacto.png' width: '10px'></a>
                        <div class='top-bar-content-link'>
                            <a id='link' href='../../index.php' target='_parent'>Página Inicial&nbsp;&nbsp;</a>
                            <a id='link' href='../../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Produtos&nbsp;&nbsp;</a>
                            <a id='link' href='../../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Usuários</a>
                        </div>
                    </div>
                </div>  
                </div>
            </div>";
    ?>
        
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
                    <input type="text" name="textPesquisa" placeholder="Pesquise um produto especifico" maxlength="116">
                </div>
            </div>
            </form>
      </div><br><br>
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
                    <div class='cell cellMedia cellHeader'>
                        id
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        IMG
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        Nome
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        Telefone
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        E-mail
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        CPF
                    </div>
                    
                    <div class='cell cellGrande'>
                        &nbsp;
                    </div>
                </div>
                ";

                // Criar linhas com os dados dos produtos
                foreach ($resultado_lista as $linha)
                {
                    echo "
                    <div class='row'>
                        <div class='cell cellMedia'>
                            ".$linha['id_usuario']."
                        </div>
                        <div class='cell cellGrande'>
                            ".'<img src="'.$linha['img'].'">'."
                        </div>
                        <div class='cell cellEnorme'>
                            ".$linha['nome']."
                        </div>
                        <div class='cell cellEnorme'>
                            ".$linha['telefone']."
                        </div>
                        <div class='cell cellEnorme'>
                            ".$linha['email']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['cpf']." 
                        </div>
                        <div class='cell cellGrande'>
                            <a href='cad_altera_usuarios_front.php?id_usuario=".$linha['id_usuario']."'> Alterar</a>&nbsp;
                            <a href='cad_exclui_usuarios_front.php?id_usuario=".$linha['id_usuario']."'> Excluir</a>&nbsp;
                        </div>
                    </div> 
                    "; 
                } 
            // Fechando a tag da tabela
            echo "</div>";
        ?>    
    </body>
</html>