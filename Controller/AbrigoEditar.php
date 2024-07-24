<?php
require_once("../Model/banco.php");
class editarController
{

    private $id_abrigo;
    private $nome;
    private $endereco;
    private $c_homens;
    private $c_mulheres;
    private $c_criancas;
    private $c_pets;
    private $quantidade_v;
    private $id_responsavel;
    private $area_estoque;
    private $cozinha;
    private $banheiros;
    private $observacao;

    public function __construct($id_abrigo)
    {
        
        $this->id_abrigo = $id_abrigo;
        $this->editar = new Banco();
        $this->criarFormulario($id_abrigo);
    }

    private function criarFormulario($id_abrigo)
    {
        $row = $this->editar->pesquisaAbrigo($id_abrigo);

        $this->nome = $row['nome'];
        $this->endereco = $row['endereco'];
        $this->c_homens = $row['c_homens'];
        $this->c_mulheres = $row['c_mulheres'];
        $this->c_criancas = $row['c_criancas'];
        $this->c_pets = $row['c_pets'];
        $this->quantidade_v = $row['quantidade_v'];
        $this->id_responsavel = $row['id_responsavel'];
        $this->area_estoque = $row['area_estoque'];
        $this->cozinha = $row['cozinha'];
        $this->banheiros = $row['banheiros'];
        $this->observacao = $row['observacao'];



    }
    public function editarFormulario($nome, $endereco, $c_homens, $c_mulheres, $c_criancas, $c_pets, $quantidade_v, $id_responsavel, $area_estoque, $cozinha, $banheiros, $observacao, $id_abrigo)
    {
        if ($this->editar->updateAbrigo($nome, $endereco, $c_homens, $c_mulheres, $c_criancas, $c_pets, $quantidade_v, $id_responsavel, $area_estoque, $cozinha, $banheiros, $observacao, $id_abrigo) == TRUE) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/listar_abrigos.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getId_abrigo()
    {
        return $this->id_abrigo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function getC_homens()
    {
        return $this->c_homens;
    }
    public function getC_mulheres()
    {
        return $this->c_mulheres;
    }
    public function getC_criancas()
    {
        return $this->c_criancas;
    }
    public function getC_pets()
    {
        return $this->c_pets;
    }
    public function getQuantidade_v()
    {
        return $this->quantidade_v;
    }
    public function getId_responsavel()
    {
        return $this->id_responsavel;
    }
    public function getArea_estoque()
    {
        return $this->area_estoque;
    }
    public function getCozinha()
    {
        return $this->cozinha;
    }
    public function getBanheiros()
    {
        return $this->banheiros;
    }
    public function getObservacao()
    {
        return $this->observacao;
    }


}
$id_abrigo = filter_input(INPUT_GET, 'id_abrigo');
if (is_null($id_abrigo)) {
    $id_abrigo = $_POST['id_abrigo'];
}

$editar = new editarController($id_abrigo);
if (isset($_POST['submit'])) {
    $editar->editarFormulario(
        $_POST['nome'],
        $_POST['endereco'],
        $_POST['c_homens'],
        $_POST['c_mulheres'],
        $_POST['c_criancas'],
        $_POST['c_pets'],
        $_POST['quantidade_v'],
        $_POST['id_responsavel'],
        $_POST['area_estoque'],
        $_POST['cozinha'],
        $_POST['banheiros'],
        $_POST['observacao'],
        $_POST['id_abrigo']);
}
?>