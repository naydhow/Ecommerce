<?php
	echo"                
		<header id='header'>
			<nav class='container'>
					<a href='../index.php'><img src='../img/logo.svg' class='logo'></a>
					<div class='menu'>
							<ul class='grid'>
									<li><a class='title' href='../index.php'>Home</a></li>
									<li><a class='title' href='../sobre.php' target='_parent'>Sobre</a></li>
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
    $idusuario = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "confirmacao_compra_back.php";
?>

<hr>
<h2>Resumo da compra</h2>
<hr>

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
	</div>

	<?php
		$total = 0.0;

		// Criar linhas com os dados dos produtos
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
					<?php echo $linha['qtde']; ?>
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['subtotal']; ?>
				</div>
            </div>
	<?php 
		}  
		echo "<h3>Total: R$ ".number_format($total, 2, ',', '.');".</h3>";
	?>

    <br><br>
    <hr>

    <h3>Deseja confirmar?</h3>
	<a href="finalizacao_compra_front.php">Finalizar</a>
    <a href="carrinho_front.php">Cancelar</a>&nbsp;&nbsp;
</div>