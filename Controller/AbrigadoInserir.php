<?php
require_once("../Model/abrigadoOBJ.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Abrigado();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setCpf($_POST['cpf']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setSexo($_POST['sexo']);
        $this->cadastro->setData_nasc($_POST['data_nasc']);
        $this->cadastro->setEndereco($_POST['endereco']);
        $this->cadastro->setContato($_POST['contato']);
        $this->cadastro->setId_abrigo($_POST['id_abrigo']);
        $this->cadastro->setObservacao($_POST['observacao']);

        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../View/listar_abrigados.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o abrigado não está duplicado');history.back()</script>";
        }
    }
}

new cadastroController();
