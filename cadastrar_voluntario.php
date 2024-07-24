<!DOCTYPE html>
<html lang="en">
	<?php include("head.html") ?>
	<script>
		function ValidaCPF(){   
			var ao_cpf=document.forms.form1.cpf.value; 
			var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;     
			if (cpfValido.test(ao_cpf) == false) {  
				//alert("invalido");
				var valorValido = document.getElementById("ao_cpf").value = "???????";
			}
		}
</script>

<body>
	<?php include("menu.html") ?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Informações cadastrais</p>
						<h1>Cadastrar Voluntário</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-100 mb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Dados Pessoais
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form method="post" action="../Controller/VoluntarioInserir.php" id="form" name="form">
										<p><input type="text" placeholder="Nome" name="nome" required></p>
						        		<p><input type="text" placeholder="CPF" name="cpf" maxlength="14" OnBlur="ValidaCPF();" required></p>
										<p><input type="email" placeholder="Email" name="email"></p>
										<p><input type="tel" placeholder="Telefone" name="telefone" required></p>
						        		<p> <label for="tipo">Tipo:</label>
											<select name="tipo">
											<option value="1">Gestor</option>
											<option value="0">Não Gestor</option>
										</select></p>
										<p><label for="especialidade">É especialista?</label>
											<select name="especialidade">
                							<option value="1">Sim</option>
                							<option value="0">Não</option>
            							</select></p>
										<p><label for="veiculo">Possui veículo?</label>
											<select id="veiculo" name="veiculo">
							                <option value="1">Sim</option>
                							<option value="0">Não</option>
            							</select></p>
										<p><input type="text" placeholder="Tipo de veículo" name="ex_veiculo">
										<p><input type="text" placeholder="Grupo de Trabalho" name="grupo"></p>
										<p><input type="submit" value="Cadastrar"></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
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