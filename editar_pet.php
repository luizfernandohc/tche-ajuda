
<?php require_once("../Controller/PetEditar.php");?>
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
							<form method="post" action="../Controller/PetEditar.php" id="form" name="form">
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
												<p><input type="text" placeholder="Tipo" name="tipo" value="<?php echo $editar->getTipo(); ?>" required autofocus></p>
												<p><input type="text" placeholder="Nome" name="nome" value="<?php echo $editar->getNome(); ?>" required></p>

                                                <p>Porte:</p>
                                                <label for="porte1">Pequeno</label>
                                                <input type="radio" id="porte1" name="porte" value="1" <?php $op=$editar->getPorte(); if($op==1){echo " checked";} ?> required>
                                                <label for="porte2">Médio</label>
                                                <input type="radio" id="porte2" name="porte" value="2" <?php $op=$editar->getPorte(); if($op==2){echo " checked";} ?> required>
                                                <label for="porte2">Grande</label>
                                                <input type="radio" id="porte2" name="porte" value="3" <?php $op=$editar->getPorte(); if($op==3){echo " checked";} ?> required>
							
												
												
                                                
                                                <p>Sexo:</p>
												<label for="sexoM">Masculino</label>
												<input type="radio" id="sexoM" name="sexo" value="M" <?php $op=$editar->getSexo(); if($op=='M'){echo " checked";} ?> required>
                                                	
                                                <label for="sexoF">Feminino</label>
												<input type="radio" id="sexoF" name="sexo" value="F" <?php $op=$editar->getSexo(); if($op=='F'){echo " checked";} ?> required>

                                                <p><input type="number" placeholder="Idade" name="idade" value="<?php echo $editar->getIdade(); ?>" required></p>
												
                                                <p>Castrado?</p>
												<label for="sim">Sim</label>
												<input type="radio" id="sim" name="castrado" value="1" <?php $op=$editar->getCastrado(); if($op==1){echo " checked";} ?> required>	
												<label for="nao">Não</label>
												<input type="radio" id="nao" name="castrado" value="0" <?php $op=$editar->getCastrado(); if($op==0){echo " checked";} ?> required>
                                                

                                                <p>Agressivo?</p>
												<label for="s">Sim</label>
												<input type="radio" id="s" name="agressividade" value="1" <?php $op=$editar->getAgressividade(); if($op==1){echo " checked";} ?> required>	
												<label for="n">Não</label>
												<input type="radio" id="n" name="agressividade" value="0" <?php $op=$editar->getAgressividade(); if($op==0){echo " checked";} ?> required>


												<p><label for="id_abrigo">Dono/Abrigado:</label>
                                                <?php new listarDonoController($editar->getId_abrigado());  ?>
												</p>
												<p><textarea  name="obs" cols="30" rows="10" placeholder="Observações"><?php echo $editar->getObs(); ?></textarea></p>
											</div>
										</div>
									</div>
								</div>
                                <input  type="hidden" name="id_pet" value="<?php echo $editar->getId_pet(); ?>">
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