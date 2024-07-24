<?php
require_once("../Model/voluntarioOBJ.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Voluntario();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setCpf($_POST['cpf']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setEspecialidade($_POST['especialidade']);
        $this->cadastro->setTipo($_POST['tipo']);
        $this->cadastro->setVeiculo($_POST['veiculo']);
        $this->cadastro->setEx_veiculo($_POST['ex_veiculo']);
        $this->cadastro->setGrupo($_POST['grupo']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../View/cadastrar_voluntario.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o voluntario não está duplicado');history.back()</script>";
        }
    }
}

new cadastroController();