<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Usuarios</title>
        <link rel="stylesheet" href="../css/cabecalho.css">
    </head>
    <body>
        <style>
            .table {width:700px; display:grid;}
            .row { display:block;}
            .cell {
                display:inline-block;
                padding: 5px 5px;
                margin-bottom: .5%;
                background-color: rgb(248, 242, 234);
                font-size: 10pt;
            }
            .cellHeader {text-align: center !important;}
            .cellCodigo {width:100px; }
            .cellDescricao {width:300px;}
            .cellPrecoHeader {width:100px;}
            .cellPreco {width:60px; text-align:right;}
            .cellAcoes {width:100px;}
        </style>

        <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
            width="100%" scrolling="no" allowfullscreen>
        </iframe>

        <a href='cad_novo_usuarios_front.php'>+ Novo Usuario</a><br><br>

        <?php
            include "cad_pesq_usuarios_back.php";

            if ($qtde == 0) {
                echo "Não foi encontrado nenhum usuario !!!<br><br>";
                return;
            }

            // Começar tabela e criar o cabeçalho
            echo "
            <div class='table'>
                <div class='row'>
                    <div class='cell cellId cellHeader'>
                        id. Usuario
                    </div>
                    <div class='cell cellNome cellHeader'>
                        Nome
                    </div>
                    <div class='cell cellTelefone cellHeader'>
                        Telefone
                    </div>
                    <div class='cell cellEmail cellHeader'>
                        Email
                    </div>
                    <div class='cell cellSenha cellHeader'>
                        Senha
                    </div>
                    <div class='cell cellData_nasc cellHeader'>
                        Data de Nascimento
                    </div>
                    <div class='cell cellCPF cellHeader'>
                        CPF
                    </div>
                    <div class='cell cellCEP cellHeader'>
                        CEP
                    </div>
                    <div class='cell cellEndereco cellHeader'>
                        Endereco
                    </div>
                    <div class='cell cellCidade cellHeader'>
                        Cidade
                    </div>
                    <div class='cell cellCEstado cellHeader'>
                        Estado
                    </div>
                    <div class='cell cellAcoes'>
                        &nbsp;
                    </div>
                </div>";

                // Criar linhas com os dados dos produtos
                foreach ($resultadolista as $linha)
                {
                    echo "
                    <div class='row'>
                        <div class='cell cellId'>
                            ".$linha['id_usuario']."
                        </div>
                        <div class='cell cellNome'>
                            ".$linha['nome']."
                        </div>
                        <div class='cell cellTelefone'>
                            ".$linha['telefone']."
                        </div>
                        <div class='cell cellEmail'>
                            ".$linha['email']."
                        </div>
                        <div class='cell cellSenha'>
                            ".$linha['senha']."
                        </div>
                        <div class='cell cellSexo'>
                            ".$linha['sexo']."
                        </div>
                        <div class='cell cellData_nasc'>
                            ".$linha['data_nasc']."
                        </div>
                        <div class='cell cellCPF'>
                            ".$linha['cpf']." 
                        </div>
                        <div class='cell cellCEP'>
                            ".$linha['cep']."
                        </div>
                        <div class='cell cellEndereco'>
                            ".$linha['endereco']."
                        </div>
                        <div class='cell cellCidade'>
                            ".$linha['cidade']."
                        </div>
                        <div class='cell cellEstado'>
                            ".$linha['estado']."
                        </div>
                        <div class='cell cellAcoes'>
                            <a href='cad_altera_usuarios_front.php?cod_usuario=".$linha['id_usuario']."'> Alterar</a>&nbsp;
                            <a href='cad_exclui_usuarios_front.php?cod_usuario=".$linha['id_usuario']."'> Excluir</a>&nbsp;
                        </div>
                    </div> "; 
                } 
            // Fechando a tag da tabela
            echo "</div>";
        ?>    
    </body>
</html>