<!DOCTYPE html>

<link rel="stylesheet" href="../css/style.css">

<?php
	include_once "../utils/header_3.php";
    //session_start();
    $idusuario = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "confirmacao_compra_back.php";
?>
<main>
	<div class="container_paginas">
		<div class="section">
			<div class='table'>
				<form>
				
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
												<span><?php echo $linha['qtde']; ?></span>
											</div>
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
						echo "<div class='text-conf-compra'>
							<h2>Não há produtos aqui! :(</h2>
						</div>";
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
								foreach ($resultado_lista as $linha)
								{
									echo "<div class='lista_separa'>";
									echo "<span>".$linha['nome']."</span>";
									echo "<span>R$ ".number_format($linha['subtotal'], 2, ',', '.');".</span>";
									echo "</div>";
								}
							?>
						</div>
						<div class="total_compra">
								<label>Total da compra:</label>
								<?php echo "<span>R$ ".number_format($total, 2, ',', '.');".</span>"; ?>
							</div>
						<div class="buttons_resumo">
							<a href="finalizacao_compra_front.php">Finalizar</a>
							<a href="carrinho_front.php" id="cance_compra">Cancelar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
	include_once "../utils/footer_3.php";
?>

<script src="../js/main.js"></script>