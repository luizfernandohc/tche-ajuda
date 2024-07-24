<?php require_once("../Controller/PetListar.php");?>
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
						<h1>Lista de Pets</h1>
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
				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details ofx">
							<thead>
								<tr>
									<th>Tipo</th>
									<th>Nome</th>
									<th>Porte</th>
									<th>Sexo</th>
									<th>Idade</th>
									<th>Dono/Abrigado</th>
									<th>Castrado</th>
									<th>Agressivo</th>
									<th>Observações</th>
									<th>Opções</th>
								</tr>
							</thead>
							<tbody class="order-details-body ofx">
								<?php new listarController();  ?>							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<?php include("footer.html") ?>

</body>
</html>