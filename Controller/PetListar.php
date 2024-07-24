<?php

require_once("../Model/banco.php");
class listarController{
    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->lista->getNomeAbrigado();
        foreach ($row as $value){

            //porte//
            if($value['porte'] == 1){
                $porte = "Pequeno";
            }else if($value['porte'] == 2){
                $porte = "Medio";
            }else if($value['porte'] == 3){
                $porte = "Grande";
            }
            //castrado//
            if($value['castrado'] == 1){
                $castrado = "Castrado"; 
            }else{
                $castrado = "Não castrado";
            }
            //agressivo//
            if($value['agressividade'] == 1){
                $agress = "Agressivo";   
            }else{
                $agress = "Não agressivo";
            }

            echo "<tr>";
            echo "<td>".$value['tipo'] ."</td>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$porte ."</td>";
            echo "<td>".$value['sexo'] ."</td>";
            echo "<td>".$value['idade'] ."</td>";
            echo "<td>".$value['nome_abrigado'] ."</td>";
            echo "<td>".$castrado ."</td>";
            echo "<td>".$agress ."</td>";
            echo "<td>".$value['obs'] ."</td>";
            echo "<td><a class='btn btn-warning' href='../View/editar_pet.php?id_pet=".$value['id_pet']."'>Editar</a><a class='btn btn-danger' href='../Controller/VoluntarioDeletar.php?id=".$value['id_pet']."'>Arquivar</a></td>";
            echo "</tr>";
        }
    }
}