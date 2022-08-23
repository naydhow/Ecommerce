<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Usuários</title>
        <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>

    <?php
        
        echo"
            <div class='container'>
                <div class='top-bar-container'>
                <div class='top-bar-fixed'>
                    <div class='top-bar-content'>
                    <img  src='../../img/logo_caricacto.png' width: '10px'>
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
                    <img src="../../img/search.svg" alt="Lupa de Pesquisa">
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
                    <div class='cell cellGrande cellHeader'>
                        id
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        IMG
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        Nome
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        Telefone
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        Email
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        Senha
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        Data de Nascimento
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        CPF
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        CEP
                    </div>
                    <div class='cell cellEnorme cellHeader'>
                        Endereco
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        Cidade
                    </div>
                    <div class='cell cellGrande cellHeader'>
                        Estado
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
                        <div class='cell cellGrande'>
                            ".$linha['id_usuario']."
                        </div>
                        <div class='cell cellGrande'>
                            ".'<img src="'.$linha['img'].'">'."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['nome']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['telefone']."
                        </div>
                        <div class='cell cellEnorme'>
                            ".$linha['email']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['senha']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['sexo']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['data_nasc']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['cpf']." 
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['cep']."
                        </div>
                        <div class='cell cellEnorme'>
                            ".$linha['endereco']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['cidade']."
                        </div>
                        <div class='cell cellGrande'>
                            ".$linha['estado']."
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