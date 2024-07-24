<?php
require_once("../Model/abrigoOBJ.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Abrigo();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setEndereco($_POST['endereco']);
        $this->cadastro->setC_homens($_POST['c_homens']);
        $this->cadastro->setC_mulheres($_POST['c_mulheres']);
        $this->cadastro->setC_criancas($_POST['c_criancas']);
        $this->cadastro->setC_pets($_POST['c_pets']);
        $this->cadastro->setQuantidade_v($_POST['quantidade_v']);
        $this->cadastro->setId_responsavel($_POST['id_responsavel']);
        $this->cadastro->setArea_estoque(floatval($_POST['area_estoque']));
        $this->cadastro->setCozinha($_POST['cozinha'] ? 1 : 0);
        $this->cadastro->setBanheiros($_POST['banheiros']);
        $this->cadastro->setObservacao($_POST['observacao']);

        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/listar_abrigos.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
