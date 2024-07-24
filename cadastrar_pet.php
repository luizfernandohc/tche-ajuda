<?php require_once("../Controller/AbrigadoListar.php");?>
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
						<h1>Cadastrar Pet</h1>
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
							<form method="post" action="../Controller/PetInserir.php" id="form" name="form">
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
												<p><input type="text" placeholder="Tipo" name="tipo" required autofocus ></p>
												<p><input type="text" placeholder="Nome" name="nome" required ></p>
												
												Porte:
												<ul id="rg-container" class="radio-container">
													<li class="radio-item">
														<label class="rb-label" for="porte1">Pequeno</label>
														<input type="radio" id="porte1" class="rb-input" name="porte" value="1" required>
													</li>
													<li class="radio-item">
														<label class="rb-label" for="porte2">Médio</label>
														<input type="radio" id="porte2" class="rb-input" name="porte" value="2" checked required>
													</li>
													<li class="radio-item">
														<label class="rb-label" for="porte3">Grande</label>	
														<input type="radio" id="porte3" class="rb-input" name="porte" value="3" required>
													</li>
												</ul>

												Sexo:
												<ul id="radio-container" class="radio-container">
													<li class="radio-item">
														<label class="rb-label" for="sexoM">Macho</label>
														<input type="radio" id="sexoM" class="rb-input" name="sexo" value="M" required>	
													</li>
													<li class="radio-item">
														<label class="rb-label" for="sexoF">Fêmea</label>
														<input type="radio" id="sexoF" class="rb-input" name="sexo" value="F" required>
													</li>
												</ul>

												<p><input type="number" placeholder="Idade" name="idade" required ></p>
												<p>Dono/Abrigado:
													<?php new listarDonoController(-1);  ?>							
												</p>
												
												Ele é castrado?
												<ul id="radio-container" class="radio-container">
													<li class="radio-item">
														<label class="rb-label" for="sim">Sim</label>
														<input type="radio" id="sim" class="rb-input" name="castrado" value="1" required>	
													</li>
													<li class="radio-item">
														<label class="rb-label" for="nao">Não</label>
														<input type="radio" id="nao" class="rb-input" name="castrado" value="0" checked required>
													</li>
												</ul>

												Ele é agressivo?
												<ul id="radio-container" class="radio-container" >
													<li class="radio-item">
														<label class="rb-label" for="s">Sim</label>
														<input type="radio" id="s" class="rb-input" name="agressividade" value="1" required>		
													</li>
													<li class="radio-item">
														<label class="rb-label" for="n">Não</label>
														<input type="radio" id="n" class="rb-input" name="agressividade" value="0" checked required>		
													</li>
												</ul>

												<p><textarea id="obs" name="obs" cols="30" rows="10" placeholder="Observações"></textarea></p>
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