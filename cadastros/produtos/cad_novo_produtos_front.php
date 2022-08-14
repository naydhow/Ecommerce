<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
</head>
<body>
    <link rel="stylesheet" href="../css/cabecalho.css">
    <!-- <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
            width="100%" scrolling="no" allowfullscreen>
    </iframe> -->

    <h1>Cadastro de Produtos</h1>

    <form action="cad_novo_produtos_back.php" method="post">
        <label>
            <strong>Nome:</strong><br />    
            <input type="text" name="nome" /><br />
            <br />
        </label>
        <label>
            <strong>Descrição:</strong><br />    
            <input type="text" name="descricao" /><br />
            <br />
        </label>
        <label>
            <strong>Estoque:</strong><br />
            <input type="number" name="estoque" /><br />
            <br />
        </label>
        <label>
            <strong>Codigo Visual:</strong><br />
            <input type="number" name="codigovisual" /><br />
            <br />
        </label>
        <label>
            <strong>Imagem:</strong><br />
            <input type="text" name="campo_imagem" /><br />
            <br />
        </label>
        <label>
            <strong>Preço:</strong><br />
            <input type="number" name="preco" /><br />
            <br />
        </label>
        <label>
            <strong>Custo:</strong><br />
            <input type="number" name="custo"  /><br />
            <br />
        </label>
        <label>
            <strong>Margem de Lucro:</strong><br />
            <input type="number" name="margem_lucro" /><br />
            <br />
        </label>
        <label>
            <strong>ICMS:</strong><br />
            <input type="number" name="icms" /><br />
            <br />
        </label>
        <input type="submit" name="button" id="button" value="Enviar" />
        <a href='cad_pesq_produtos_front.php'>Voltar</a><br><br>
    </form> 
</body>
</html>