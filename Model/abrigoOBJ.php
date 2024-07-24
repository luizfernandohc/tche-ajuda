<?php
require_once("banco.php");

class Abrigo extends Banco {

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


    //Metodos Set
 
    public function setNome($string){
        $this->nome = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setC_homens($string){
        $this->c_homens = $string;
    }
    public function setC_mulheres($string){
        $this->c_mulheres = $string;
    }
    public function setC_criancas($string){
        $this->c_criancas = $string;
    }
    public function setC_pets($string){
        $this->c_pets = $string;
    }
    public function setQuantidade_v($string){
        $this->quantidade_v = $string;
    }
    public function setId_responsavel($string){
        $this->id_responsavel = $string;
    }
    public function setArea_estoque($float){
        $this->area_estoque = (float)$float; // Garantindo que seja armazenado como float
    }
    
    public function setCozinha($booleanValue){
        $this->cozinha = $booleanValue ? 1 : 0;
    }    
    public function setBanheiros($string){
        $this->banheiros = $string;
    }
    public function setObservacao($string){
        $this->observacao = $string;
    }



    //Metodos Get
    public function getId_abrigo(){
        return $this->id_abrigo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getC_homens(){
        return $this->c_homens;
    }
    public function getC_mulheres(){
        return $this->c_mulheres;
    }
    public function getC_criancas(){
        return $this->c_criancas;
    }
    public function getC_pets(){
        return $this->c_pets;
    }
    public function getQuantidade_v(){
        return $this->quantidade_v;
    }
    public function getId_responsavel(){
        return $this->id_responsavel;
    }
    public function getArea_estoque(){
        return $this->area_estoque;
    }
    public function getCozinha(){
        return $this->cozinha == 1 ? true : false;
    }
    public function getBanheiros(){
        return $this->banheiros;
    }
    public function getObservacao(){
        return $this->observacao;
    }


    public function incluir(){
        return $this->setAbrigo(
        $this->getNome(),
        $this->getEndereco(),
        $this->getC_homens(),
        $this->getC_mulheres(),
        $this->getC_criancas(),
        $this->getC_pets(),
        $this->getQuantidade_v(),
        $this->getId_responsavel(),
        $this->getArea_estoque(),
        $this->getCozinha(),
        $this->getBanheiros(),
        $this->getObservacao());
    }
}
?>
