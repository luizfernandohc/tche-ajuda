<?php
require_once("banco.php");

class Voluntario extends Banco {

    private $nome;
    private $cpf;
    private $telefone;
    private $especialidade;
    private $tipo;
    private $veiculo;
    private $ex_veiculo;
    private $grupo;

 //Metodos Set
 public function setNome($string){
    $this->nome = $string;
}
public function setCpf($string){
    $this->cpf = $string;
}
public function setTelefone($string){
    $this->telefone = $string;
}
public function setEspecialidade($string){
    $this->especialidade = $string;
}
public function setTipo($string){
    $this->tipo = $string;
}
public function setVeiculo($string){
    $this->veiculo = $string;
}
public function setEx_veiculo($string){
    $this->ex_veiculo = $string;
}
public function setGrupo($string){
    $this->grupo = $string;
}
//Metodos Get
public function getNome(){
    return $this->nome;
}
public function getCpf(){
    return $this->cpf;
}
public function getTelefone(){
    return $this->telefone;
}
public function getEspecialidade(){
    return $this->especialidade;    
}
public function getTipo(){
    return $this->tipo;
}
public function getVeiculo(){
    return $this->veiculo;
}
public function getEX_veiculo(){
    return $this->ex_veiculo;
}
public function getGrupo(){
    return $this->grupo;
}
    
public function incluir(){
    return $this->setVoluntario($this->getNome(),$this->getCpf(),$this->getTelefone(),$this->getEspecialidade(),$this->getTipo(),$this->getVeiculo(),$this->getEx_veiculo(),$this->getGrupo());
}

}
?>
