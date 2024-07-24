<?php
require_once("../Model/petOBJ.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Pet();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setTipo($_POST['tipo']);
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setPorte($_POST['porte']);
        $this->cadastro->setSexo($_POST['sexo']);
        $this->cadastro->setIdade($_POST['idade']);
        $this->cadastro->setId_abrigado($_POST['id_abrigado']);
        $this->cadastro->setCastrado($_POST['castrado']);
        $this->cadastro->setAgressividade($_POST['agressividade']);
        $this->cadastro->setObs($_POST['obs']);


        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/listar_pets.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
