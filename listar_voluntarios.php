<?php require_once("../Controller/VoluntarioListar.php");?>
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
						<h1>Listar Voluntários</h1>
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
						<table class="order-details">
							<thead>
								<tr>
									<th>Nome</th>
									<th>CPF</th>
									<th>Telefone</th>
									<th>Especialidade</th>
									<th>Tipo</th>
									<th>Veículo</th>
									<th>Tipo Veículo</th>
									<th>Grupo</th>
									<th>Alterar</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
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