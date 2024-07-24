<?php require_once("../Controller/AbrigoListar.php");?>
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
						<h1>Lista de Abrigos</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container aux">
			<div class="row">
				<div class="col-lg-4 aux2">
					<div class="order-details-wrap tabela-listar-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Endereço</th>
									<th>Responsável</th>
									<th>Observação</th>
									<th>Opções</th>
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