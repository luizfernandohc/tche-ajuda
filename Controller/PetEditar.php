<?php
require_once("../Model/banco.php");
class editarController
{

    private $id_pet;
    private $tipo;
    private $nome;
    private $porte;
    private $sexo;
    private $idade;
    private $id_abrigado;
    private $castrado;
    private $agressividade;
    private $obs;

    public function __construct($id_pet)
    {
        
        $this->id_pet = $id_pet;
        $this->editar = new Banco();
        $this->criarFormulario($id_pet);
    }

    private function criarFormulario($id_pet)
    {
        $row = $this->editar->pesquisaPet($id_pet);

        $this->tipo = $row['tipo'];
        $this->nome = $row['nome'];
        $this->porte = $row['porte'];
        $this->sexo = $row['sexo'];
        $this->idade = $row['idade'];
        $this->id_abrigado = $row['dono'];
        $this->castrado = $row['castrado'];
        $this->agressividade = $row['agressividade'];
        $this->obs = $row['obs'];



    }
    public function editarFormulario($tipo, $nome, $porte, $sexo, $idade, $id_abrigado, $castrado, $agressividade, $obs, $id_pet)
    {
        if ($this->editar->updatePet($tipo, $nome, $porte, $sexo, $idade, $id_abrigado, $castrado, $agressividade, $obs, $id_pet) == TRUE) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/listar_pets.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getId_pet(){
        return $this->id_pet;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPorte(){
        return $this->porte;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getId_abrigado(){
        return $this->id_abrigado;
    }
    public function getCastrado(){
        return $this->castrado;
    }
    public function getAgressividade(){
        return $this->agressividade;
    }
    public function getObs(){
        return $this->obs;
    }



}
$id_pet = filter_input(INPUT_GET, 'id_pet');
if (is_null($id_pet)) {
    $id_pet = $_POST['id_pet'];
}

$editar = new editarController($id_pet);
if (isset($_POST['submit'])) {
    $editar->editarFormulario(
        $_POST['tipo'],
        $_POST['nome'],
        $_POST['porte'],
        $_POST['sexo'],
        $_POST['idade'],
        $_POST['id_abrigado'],
        $_POST['castrado'],
        $_POST['agressividade'],
        $_POST['obs'],
        $_POST['id_pet']);
}
?>