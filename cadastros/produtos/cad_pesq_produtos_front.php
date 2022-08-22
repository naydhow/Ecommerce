<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Produtos</title>
        <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>
        <style>
            .table {width: 1200px; display:grid;}
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

        <iframe src="../../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
            width="100%" scrolling="no" allowfullscreen>
        </iframe>

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

        <a href='cad_novo_produtos_front.php'>+ Novo Produto</a><br><br>

        <?php
            include "cad_pesq_produtos_back.php";

            if ($qtde == 0) {
                echo "Não foi encontrado nenhum produto !!!<br><br>";
                return;
            }

            // Começar tabela e criar o cabeçalho
            echo "
            <div class='table'>
                <div class='row'>
                    <div class='cell cellId cellHeader'>
                        id. Produto
                    </div>
                    <div class='cell cellNome cellHeader'>
                        Nome
                    </div>
                    <div class='cell cellDescricao cellHeader'>
                        Descrição
                    </div>
                    <div class='cell cellEstoque cellHeader'>
                        Estoque
                    </div>
                    <div class='cell cellEstoque cellHeader'>
                        Codigo Visual
                    </div>
                    <div class='cell cellEstoque cellHeader'>
                        Imagem
                    </div>
                    <div class='cell cellPreco cellHeader'>
                        Preço
                    </div>
                    <div class='cell cellCusto cellHeader'>
                        Custo
                    </div>
                    <div class='cell cellMargemLucro cellHeader'>
                        Margem de Lucro
                    </div>
                    <div class='cell cellIcms cellHeader'>
                        ICMS
                    </div>
                    <div class='cell cellAcoes'>
                        &nbsp;
                    </div>
                </div>";

                // Criar linhas com os dados dos produtos
                foreach ($resultado_lista as $linha)
                {
                    echo "
                    <div class='row'>
                        <div class='cell cellId'>
                            ".$linha['id_produto']."
                        </div>
                        <div class='cell cellNome'>
                            ".$linha['nome']."
                        </div>
                        <div class='cell cellDescricao'>
                            ".$linha['descricao']."
                        </div>
                        <div class='cell cellEstoque'>
                            ".$linha['estoque']."
                        </div>
                        <div class='cell cellCodigoVisual'>
                            ".$linha['codigovisual']."
                        </div>
                        <div class='cell cellImagem'>
                            ".$linha['campo_imagem']."
                        </div>
                        <div class='cell cellPreco'>
                            ".$linha['preco']."
                        </div>
                        <div class='cell cellCusto'>
                            ".$linha['custo']."
                        </div>
                        <div class='cell cellMargemLucro'>
                            ".$linha['margem_lucro']."
                        </div>
                        <div class='cell cellIcms'>
                            ".$linha['icms']."
                        </div>
                        <div class='cell cellAcoes'>
                            <a href='cad_altera_produtos_front.php?id_produto=".$linha['id_produto']."'> Alterar</a>&nbsp;
                            <a href='cad_exclui_produtos_front.php?id_produto=".$linha['id_produto']."'> Excluir</a>&nbsp;
                        </div>
                    </div> "; 
                } 
            // Fechando a tag da tabela
            echo "</div>";
        ?>    
    </body>
</html>