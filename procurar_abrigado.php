<?php require_once("../Controller/AbrigadoProcurar.php"); ?>
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
                <div class="col-6">
                    <form class="d-flex" action="procurar_abrigado.php" method="GET" id="formPesquisa">
                        <div class="input-group mb-3">
                            <input class="form-control me-2" type="textfield" id="nome" name="nome" size="60" maxlength="250" placeholder="Digite aqui para pesquisar por Pessoa - Nome, CPF e Telefone." required>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Procurar</button>
                            </div>
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