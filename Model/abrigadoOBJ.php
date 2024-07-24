<?php
require_once("banco.php");

class Abrigado extends Banco {

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
    public function setSexo($string){
        $this->sexo = $string;
    }
    public function setData_nasc($string){
        $this->data_nasc = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setContato($string){
        $this->contato = $string;
    }
    public function setId_abrigo($string){
        $this->id_abrigo = $string;
    }
    public function setObservacao($string){
        $this->observacao = $string;
    }

    //Metodos Get
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


    public function incluir(){
        return $this->setAbrigado(
        $this->getNome(),
        $this->getCpf(),
        $this->getTelefone(),
        $this->getSexo(),
        $this->getData_nasc(),
        $this->getEndereco(),
        $this->getContato(),
        $this->getId_abrigo(),
        $this->getObservacao());
    }
}
?>
