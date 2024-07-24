<?php
require_once("banco.php");

class Pet extends Banco {

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



    //Metodos Set
 
    public function setTipo($string){
        $this->tipo = $string;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setPorte($string){
        $this->porte = $string;
    }
    public function setSexo($string){
        $this->sexo = $string;
    }
    public function setIdade($string){
        $this->idade = $string;
    }
    public function setId_abrigado($string){
        $this->id_abrigado = $string;
    }
    public function setCastrado($string){
        $this->castrado = $string;
    }
    public function setAgressividade($string){
        $this->agressividade = $string;
    }
    public function setObs($string){
        $this->obs = $string;
    }
    
    
    
   



    //Metodos Get
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
    


    public function incluir(){
        return $this->setPet(
        $this->getTipo(),
        $this->getNome(),
        $this->getPorte(),
        $this->getSexo(),
        $this->getIdade(),
        $this->getId_abrigado(),
        $this->getCastrado(),
        $this->getAgressividade(),
        $this->getObs());
    }
}
?>
