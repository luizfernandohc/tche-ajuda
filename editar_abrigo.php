<?php require_once("../Controller/AbrigoEditar.php");?>
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
							<form method="post" action="../Controller/AbrigoEditar.php" id="form" name="form">
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
												<p><input type="text" placeholder="Nome do Abrigo" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus></p>
												<p><input type="text" placeholder="Endereço" name="endereco" value="<?php echo $editar->getEndereco(); ?>" required></p>
                                                <p><label for="id_responsavel">Responsável Principal</label>
													<?php new listarRespController($editar->getId_responsavel());  ?>
												</p>
                                                
												Tem cozinha?
												<ul id="radio-container" class="radio-container">
													<li class="radio-item">
														<label class="rb-label" for="sim">Sim</label>
														<input type="radio" id="sim" class="rb-input" name="cozinha" value="1" <?php $op=$editar->getCozinha(); if($op==1){echo " checked";} ?> required>	
													</li>
													<li class="radio-item">
														<label class="rb-label" for="nao">Não</label>
														<input type="radio" id="nao" class="rb-input" name="cozinha" value="0" <?php $op=$editar->getCozinha(); if($op==0){echo " checked";} ?> required>
													</li>
												</ul>

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
												<p><label for="c_homens" >Capacidade de Homens </label>
                                                <input type="number"placeholder="Capacidade de homens" name="c_homens" value="<?php echo $editar->getC_homens(); ?>" required></p>
												<p><label for="c_mulheres">Capacidade de Mulheres</label>
                                                <input type="number"placeholder="Capacidade de mulheres" name="c_mulheres" value="<?php echo $editar->getC_mulheres(); ?>" required></p>
												<p><label for="c_criancas">Capacidade de Crianças</label>
                                                <input type="number"placeholder="Capacidade de crianças" name="c_criancas" value="<?php echo $editar->getC_criancas(); ?>" required></p>
												<p><label for="c_pets">Capacidade de Pets</label>
                                                <p><input type="number"placeholder="Capacidade de pets"  name="c_pets" value="<?php echo $editar->getC_pets(); ?>" required></p>
												<p><label for="quan_v">Quantidade de Voluntarios</label>
                                                <input type="number"placeholder="Quantidade de voluntários"  name="quantidade_v" value="<?php echo $editar->getQuantidade_v(); ?>" required></p>
												<p><label for="area_estoque">Area do Estoque</label>
                                                <input  type="number"placeholder="Area do estoque(m)"   name="area_estoque" step="0.01" value="<?php echo $editar->getArea_estoque(); ?>" required></p>
												<p><label for="banheiro">Quantidade de banheiros</label>
                                                <input  type="number"placeholder="Banheiros"  name="banheiros" value="<?php echo $editar->getBanheiros(); ?>" required></p>
												<p><textarea  name="observacao" cols="30" rows="10" placeholder="Observações"><?php echo $editar->getObservacao(); ?></textarea></p>
											</div>
										</div>
									</div>
								</div>
								<input  type="hidden" name="id_abrigo" value="<?php echo $editar->getId_abrigo(); ?>">
								<p><input type="submit" value="Salvar" name="submit"></p>
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