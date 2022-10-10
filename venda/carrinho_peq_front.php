<!DOCTYPE html>
<link rel="stylesheet" href="../css/style.css">

<html>
	<?php
			include "../utils/conexao.php";

			// session_start();
			$acao = $_GET['acao'] ?? '';
			$id_produto = $_GET['id_produto'] ?? 0;
			// $id_usuario = $_SESSION['id_usuario'];
			$id_usuario = 1; // Depois precisamos alterar para pegar da $_SESSION

		if ($acao=='up') {
			if (is_array($_POST['prod']))
				$prods = $_POST['prod'];
			else
				$prods = array();
		}

			include "carrinho_peq_back.php";
	?>
	<body id="body">	
		<div class='table_peq'>
			<form action="?acao=up" id="IdForm" method="post">
			
			<?php
				$total = 0.0;

				// Criar linhas com os dados dos produtos
						if($resultado_lista == null)
						{
							echo "Não há produtos aqui! :(";
							exit;
						}

						foreach ($resultado_lista as $linha)
						{ 
							$idprod = $linha['id_produto'];
							// $total += floatval($linha['subtotal']);
							$img;
							if($linha['campo_imagem'] == "http://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/") $img='../img/prd.jpg'; else  $img=$linha['campo_imagem'];
			?>
						<div class='row_carrinho_peq'>
							<div class='cell_carrinho_peq'>
								<img src="<?php echo $img; ?>" id='item-img-cart'>  
								<div class="itens_peq">
									<div class='itens_princ'>
										<span><?php echo $linha['nome']; ?></span>
										
										<div class='input_number'>
											<a href="#" id="IdLink" onclick="menos(<?php echo $idprod?>);"><img src="../img/menos.svg"></a>
											<input type="text" size="3" id="<?php echo $idprod?>" name="prod[<?php echo $idprod; ?>]"
												value="<?php echo $linha['qtde']; ?>" onkeypress="onlynumber();"/>
											<a href="#" id="IdLink" onclick="mais(<?php echo $idprod?>);"><img src="../img/mais.svg"></a>
										</div>
									</div>
									<div class="itens_secund_peq">
									<span><b>R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?></b></span>
										<a href='?acao=del&id_produto=<?php echo $idprod; ?>'>Excluir</a>
									</div>

								</div>
							</div>
						</div>
			<?php 
				}  
				// echo "<h3>Total da compra: R$ ".number_format($total, 2, ',', '.');".</h3>";
			?>
			</form>
		</div>
	</body>
</html>
<script src="../js/main.js"></script>