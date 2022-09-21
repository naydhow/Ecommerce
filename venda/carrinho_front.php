<link rel="stylesheet" href="../css/style.css">
<link rel="icon" href="../img/logopeq_caricacto.png">

<?php
/*
Extraído de:
http://www.davidchc.com.br/video-aula/php/carrinho-de-compras-com-php/
vídeo aula de:https://www.youtube.com/watch?v=CBzfcl-Qk1c

Adaptado por Profa. Ariane Scarelli para banco de dados PostgreSQL (ago/2016)
Adaptado por Prof. Victor rodrigues (ago/2022)
*/
    //session_start();
    $acao = $_GET['acao'] ?? '';
    $id_produto = $_GET['id_produto'] ?? 0;
		$id_usuario = 1; // Depois precisamos alterar para pegar da $_SESSION

	if ($acao=='up') {
		if (is_array($_POST['prod']))
			$prods = $_POST['prod'];
		else
			$prods = array();
	}

    include "carrinho_back.php";
?>

<div class='table'>
	<div class='row'>
		<div class='cell cellDescricao cellHeader'>
			Descrição
		</div>
		<div class='cell cellPreco cellHeader'>
			Preço
		</div>
		<div class='cell cellPreco cellHeader'>
			Qtde.
		</div>
		<div class='cell cellPreco cellHeader'>
			Subtotal
		</div>
		<div class='cell cellAcoes'>
			&nbsp;
		</div>
	</div>

	<form action="?acao=up" method="post">
	
	<?php
		$total = 0.0;

		// Criar linhas com os dados dos produtos
				if($resultado_lista == null)
				{
					echo "Não há produtos aqui! :(";

					echo "<br><br>
								<a href='selecao_produtos_front.php'>Continuar Comprando</a>&nbsp;&nbsp;
								<a href='finalizacompra.php'>Finalizar Compra</a>";
					exit;
				}

        foreach ($resultado_lista as $linha)
        { 
					$idprod = $linha['id_produto'];
					$total += floatval($linha['subtotal']);
	?>
            <div class='row'>
				<div class='cell cellDescricao'>
					<?php echo $linha['descricao']; ?>
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['preco']; ?>
				</div>
				<div class='cell cellPreco'>
					<input type="text" size="3" name="prod[<?php echo $idprod; ?>]"
						value="<?php echo $linha['qtde']; ?>" />
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['subtotal']; ?>
				</div>
				<div class='cell cellAcoes'>
					<a href='?acao=del&id_produto=<?php echo $idprod; ?>'>Excluir</a>
				</div>
            </div>
	<?php 
		}  
		echo "<h3>Total da compra: R$ ".number_format($total, 2, ',', '.');".</h3>";
	?>

    <br><br>
	<input type="submit" value="Atualizar Carrinho" />&nbsp;&nbsp;
	<a href="selecao_produtos_front.php">Continuar Comprando</a>&nbsp;&nbsp;
	<a href="finalizacompra.php">Finalizar Compra</a>
	
	</form>

</div>