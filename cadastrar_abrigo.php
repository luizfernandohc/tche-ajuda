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
						<h1>Cadastrar Abrigo</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-100 mb-100">
		<div class="container">
			<div class="row cad-center">
				<div class="col-lg-7">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
							<form method="post" action="../Controller/AbrigoInserir.php" id="form" name="form">
								<div class="card single-accordion">
									<div class="card-header" id="headingOne">
										<h5 class="mb-0">
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Dados Cadastrais
											</button>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											<div class="billing-address-form">
												<p>
													<input type="text" placeholder="Nome do Abrigo" name="nome" required autofocus>
												</p>
												<p>
													<input type="text" placeholder="Endereço" name="endereco" required>
												</p>
												<p>
													<label for="id_responsavel">Responsável Principal:</label>
													<?php new listarRespController(-1);  ?>							
												</p>
												
												Tem cozinha?
												<ul id="radio-container" class="radio-container">
													<li class="radio-item">
														<label class="rb-label" for="sim">Sim</label>
														<input type="radio" id="sim" class="rb-input" name="cozinha" value="1" checked required>	
													</li>
													<li class="radio-item">
														<label class="rb-label" for="nao">Não</label>
														<input type="radio" id="nao" class="rb-input" name="cozinha" value="0" required>
													</li>
												</ul>

												<p>
													<textarea id="observacao" name="observacao" cols="30" rows="10" placeholder="Observações"></textarea>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card single-accordion">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
											Capacidades do Abrigo
											</button>
										</h5>
									</div>

									<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">
											<div class="billing-address-form">
												<p>
													<label for="c_homens" >Capacidade de Homens </label>
													<input type="number" name="c_homens" required>
												</p>
												<p>
													<label for="c_mulheres">Capacidade de Mulheres</label>
													<input type="number" name="c_mulheres" required>
												</p>
												<p>
													<label for="c_criancas">Capacidade de Crianças</label>
													<input type="number" name="c_criancas" required>
												</p>
												<p>
													<label for="c_pets">Capacidade de Pets</label>
													<input type="number" name="c_pets" required>
												</p>
												<p>
													<label for="quan_v">Quantidade de Voluntarios</label>
													<input type="number" name="quantidade_v" required>
												</p>
												<p>
													<label for="area_estoque">Area do Estoque</label>
													<input type="number" name="area_estoque" step="0.01" required>
												</p>
												<p>
													<label for="ibanheiro">Quantidade de banheiros</label>
													<input type="number" name="banheiros" required>
												</p>
											</div>
										</div>
									</div>
								</div>
								<p><input type="submit" value="Cadastrar"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<?php include("footer.html") ?>

</body>
</html>