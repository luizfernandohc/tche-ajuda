<?php require_once("../Controller/AbrigoProcurar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("head.html") ?>

<body>
	<?php include("menu.html") ?>

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Informações cadastrais</p>
						<h1>Procurar Abrigo</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<form class="d-flex mb-3" action="procurar_abrigo.php" method="GET">
						<input class="form-control me-2" type="textfield" id="nome" name="nome" size="70" maxlength="250" placeholder="Digite o nome do abrigo." required>
						<div class="container">
							<button type="submit" class="btn btn-primary">Procurar</button>
						</div>
					</form>
					<table class="order-details">
						<tbody class="order-details-body">
							<?php new procurarController();  ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<?php include("footer.html") ?>

</body>

</html>