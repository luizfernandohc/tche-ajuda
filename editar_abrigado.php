
<?php require_once("../Controller/AbrigadoEditar.php");?>
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
						<h1>Cadastrar Abrigado</h1>
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
							<form method="post" action="../Controller/AbrigadoEditar.php" id="form" name="form">
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
												<p><input type="text" placeholder="Nome do Abrigado" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus></p>
												
												<p><input type="text" placeholder="CPF" id="cpf" name="cpf" maxlength="14" onkeypress="FormataCPF(this);" title="O CPF deve ter exatamente 11 dígitos." value="<?php echo $editar->getCpf(); ?>" required></p>
												<p><input class="form-control" type="text" id="telefone" name="telefone" placeholder="Telefone" maxlength="15" onkeypress="FormataTfone(this);" value="<?php echo $editar->getTelefone(); ?>" required></p>
												
												Sexo:
												<ul id="radio-container" class="radio-container">
													<li class="radio-item">
														<label class="rb-label" for="sexoM">Masculino</label>
														<input type="radio" id="sexoM" class="rb-input" name="sexo" value="M" <?php $op=$editar->getSexo(); if($op=='M'){echo " checked";} ?> required>	
													</li>
													<li class="radio-item">
														<label class="rb-label" for="sexoF">Feminino</label>
														<input type="radio" id="sexoF" class="rb-input" name="sexo" value="F" <?php $op=$editar->getSexo(); if($op=='F'){echo " checked";} ?> required>
													</li>
												</ul>

												<p><input class="form-control" type="date" id="data_nasc" name="data_nasc" placeholder="Data de nascimento" value="<?php echo $editar->getData_nasc(); ?>" required></p>
												<p><input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço" value="<?php echo $editar->getEndereco(); ?>" required></p>
												<p><input class="form-control" type="text" id="contato" name="contato" placeholder="Contato" value="<?php echo $editar->getContato(); ?>" required></p>
												<p><label for="id_abrigo">Abrigo Relacionado:</label>
                                                <?php new listarAbrigoController($editar->getId_abrigo());  ?>
												</p>
												<p><textarea name="observacao" cols="30" rows="10" placeholder="Observações"><?php echo $editar->getObservacao(); ?></textarea></p>
											</div>
										</div>
									</div>
								</div>
                                <input  type="hidden" name="id_abrigado" value="<?php echo $editar->getId_abrigado(); ?>">
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