<?php
require_once("../Model/banco.php");
class editarController
{

    private $id_abrigado;
    private $nome;
    private $cpf;
    private $telefone;
    private $sexo;
    private $data_nasc;
    private $endereco;
    private $contato;
    private $id_abrigo;
    private $observacao;


    public function __construct($id_abrigado)
    {
        
        $this->id_abrigado = $id_abrigado;
        $this->editar = new Banco();
        $this->criarFormulario($id_abrigado);
    }

    private function criarFormulario($id_abrigado)
    {
        $row = $this->editar->pesquisaAbrigado($id_abrigado);

        $this->nome = $row['nome'];
        $this->cpf = $row['cpf'];
        $this->telefone = $row['telefone'];
        $this->sexo = $row['sexo'];
        $this->data_nasc = $row['data_nasc'];
        $this->endereco = $row['endereco'];
        $this->contato = $row['contato'];
        $this->id_abrigo = $row['id_abrigo'];
        $this->observacao = $row['observacao'];



    }
    public function editarFormulario($nome, $cpf, $telefone, $sexo, $data_nasc, $endereco, $contato, $id_abrigo, $observacao,$id_abrigado)
    {
        if ($this->editar->updateAbrigado($nome, $cpf, $telefone, $sexo, $data_nasc, $endereco, $contato, $id_abrigo, $observacao,$id_abrigado) == TRUE) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/listar_abrigados.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getId_abrigado(){
        return $this->id_abrigado;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getData_nasc(){
        return $this->data_nasc;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getContato(){
        return $this->contato;
    }
    public function getId_abrigo(){
        return $this->id_abrigo;
    }
    public function getObservacao(){
        return $this->observacao;
    }



}
$id_abrigado = filter_input(INPUT_GET, 'id_abrigado');
if (is_null($id_abrigado)) {
    $id_abrigo = $_POST['id_abrigado'];
}

$editar = new editarController($id_abrigado);
if (isset($_POST['submit'])) {
    $editar->editarFormulario(
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['telefone'],
        $_POST['sexo'],
        $_POST['data_nasc'],
        $_POST['endereco'],
        $_POST['contato'],
        $_POST['id_abrigo'],
        $_POST['observacao'],
        $_POST['id_abrigado']);
}
?>