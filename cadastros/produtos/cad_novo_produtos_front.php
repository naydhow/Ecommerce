<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="../../css/style.css">
    
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
</head>
<body>
    <div class="cadastro_produtos">
        <p id="cad_titulo">Cadastro de Produtos</p>

        <div class="form_cad_prod">             
            <form action="cad_novo_produtos_back.php" method="post">
                <div class="input-group">
                    <div class="input-box">
                        <label>
                            <strong>Nome:</strong><br />    
                            <input type="text" name="nome" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <strong>Descrição:</strong><br />    
                            <input type="text" name="descricao" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <strong>Estoque:</strong><br />
                            <input type="number" name="estoque" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <strong>Código Visual:</strong><br />
                            <input type="text" name="codigovisual" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <strong>Imagem:</strong><br />
                            <input type="text" name="campo_imagem" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <strong>Preço:</strong><br />
                            <input type="number" name="preco" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <strong>Custo:</strong><br />
                            <input type="number" name="custo"  /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <strong>Margem de Lucro:</strong><br />
                            <input type="number" name="margem_lucro" /><br />
                            <br />
                        </label>
                    </div>
                    <div class="input-box">
                        <label>
                            <strong>ICMS:</strong><br />
                            <input type="number" name="icms" /><br />
                            <br />
                        </label>
                    </div>
                </div>
                    

                <div class="buttons">
                    <input type="submit" name="button" id="button" value="Enviar" />
                    <a id="voltar" href='cad_pesq_produtos_front.php'>Voltar</a><br><br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>