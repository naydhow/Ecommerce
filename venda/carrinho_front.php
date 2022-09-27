<link rel="stylesheet" href="../css/style.css">
<link rel="icon" href="../img/logopeq_caricacto.svg">

<?php
/*
Extraído de:
http://www.davidchc.com.br/video-aula/php/carrinho-de-compras-com-php/
vídeo aula de:https://www.youtube.com/watch?v=CBzfcl-Qk1c

Adaptado por Profa. Ariane Scarelli para banco de dados PostgreSQL (ago/2016)
Adaptado por Prof. Victor rodrigues (ago/2022)
*/
echo"                
		<header id='header'>
			<nav class='container'>
					<a href='../index.php'><img src='../img/logo.svg' class='logo'></a>
					<div class='menu'>
							<ul class='grid'>
									<li><a class='title' href='../index.php'>Home</a></li>
									<li><a class='title'>Sobre</a></li>
									<li><a class='title' href='../venda/selecao_produtos_front.php' target='_parent'>Produtos</a></li>
									<li><a class='title' href='../cadastros/produtos/cad_pesq_produtos_front.php' target='_parent'>Contato</a></li>
									<li><a class='title' href='../cadastros/usuarios/cad_pesq_usuarios_front.php' target='_parent'>Estatísticas</a></li>
							</ul>
					</div>
					<a class='title' href='../venda/carrinho_front.php' target='_parent'><img class='icone_topo' src='../img/img_carrinhovazio.svg' ></a>
					<a class='title'href='../login/login.html' target='_parent'><img class='icone_topo' src='../img/img_perfil.svg'></a>
			</nav>
		</header>
		";

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
	<!-- <div class='row'>
		<div class='cell_carrinho'>
			Descrição
		</div>
		<div class='cell_carrinho'>
			Preço
		</div>
		<div class='cell_carrinho'>
			Qtde.
		</div>
		<div class='cell_carrinho'>
			Subtotal
		</div>
		<div class='cell_carrinho'>
			&nbsp;
		</div>
	</div> -->

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

			<div class='row_carrinho'>
				<div class='cell_carrinho'>
					Descrição
				</div>
				<div class='cell_carrinho'>
					Preço
				</div>
				<div class='cell_carrinho'>
					Qtde.
				</div>
				<div class='cell_carrinho'>
					Subtotal
				</div>
				<div class='cell_carrinho'>
					Excluir
				</div>
			</div>

            <div class='row_carrinho'>
				<div class='cell_carrinho'>
					<?php echo $linha['descricao']; ?>  
				</div>
				<div class='cell_carrinho'>
					<?php echo $linha['preco']; ?>
				</div>
				<div class='cell_carrinho'>
					<input type="text" size="3" name="prod[<?php echo $idprod; ?>]"
						value="<?php echo $linha['qtde']; ?>" />
				</div>
				<div class='cell_carrinho'>
					<?php echo $linha['subtotal']; ?>
				</div>
				<div class='cell_carrinho'>
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