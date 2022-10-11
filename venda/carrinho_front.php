<!DOCTYPE html>

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
	include_once "../utils/header.php";

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
<main>
	<div class="container_paginas">
		<div class="section">
			<div class='table'>
				<form action="?acao=up" id="IdForm" method="post">
				
				<?php
					if($resultado_lista != null)
					{
						$total = 0.0;
						$numprodutos = 0;

							foreach ($resultado_lista as $linha)
							{ 
								$numprodutos++;
								$idprod = $linha['id_produto'];
								$total += floatval($linha['subtotal']);
								$img;
								if($linha['campo_imagem'] == "http://projetoscti.com.br/projetoscti24/Ecommerce/img_upload/") $img='../img/prd.jpg'; else  $img=$linha['campo_imagem'];
				?>
							<div class='row_carrinho'>
								<div class='cell_carrinho'>
									<img src="<?php echo $img; ?>" id='item-img-cart'>  
									<div class="itens">
										<div class='itens_princ'>
											<span><?php echo $linha['nome']; ?></span>
											
											<div class='input_number'>
												<a href="#" id="IdLink" onclick="menos(<?php echo $idprod?>);"><img src="../img/menos.svg"></a>
												<input type="text" size="3" id="<?php echo $idprod?>" name="prod[<?php echo $idprod; ?>]"
													value="<?php echo $linha['qtde']; ?>" onkeypress="onlynumber();"/>
												<a href="#" id="IdLink" onclick="mais(<?php echo $idprod?>);"><img src="../img/mais.svg"></a>
											</div>

											<a href='?acao=del&id_produto=<?php echo $idprod; ?>'>Excluir</a>
										</div>

										<div class="itens_secund">
											<span><b>R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?></b></span>
											
										</div>
									</div>
								</div>
							</div>
				<?php 
					}  
					}
					if($resultado_lista == null)
					{
						echo "Não há produtos aqui! :(";
					}
				?>
				</form>
				<div class="segura">
					<div class="resumo_comp">
						<span id="titulo_resumo">Resumo do Pedido</span>
						<div class="itens_resumo">
							<?php if($numprodutos == 0 || $numprodutos >1) echo "<label>".$numprodutos." produtos</label>"; else echo "<label>".$numprodutos." produto</label>";?>
							<?php echo "<span>R$ ".number_format($total, 2, ',', '.');".</span>"; ?>
						</div>
						<div class="lista_resumo">
							<?php
								if($resultado_lista != null)
								{
									foreach ($resultado_lista as $linha)
									{
										echo "<div class='lista_separa'>";
										echo "<span>".$linha['nome']."</span>";
										echo "<span>R$ ".number_format($linha['subtotal'], 2, ',', '.');".</span>";
										echo "</div>";
									}
								}
							?>
						</div>
						<div class="total_compra">
								<label>Total da compra:</label>
								<?php echo "<span>R$ ".number_format($total, 2, ',', '.');".</span>"; ?>
							</div>
						<div class="buttons_resumo">
							<a href="confirmacao_compra_front.php">Finalizar Compra</a>
							<a href="selecao_produtos_front.php" id="cont_compra">Continuar Comprando</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
	include_once "../utils/footer.php";
?>

<script src="../js/main.js"></script>