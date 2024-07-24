<?php

require_once("../Model/banco.php");
class listarController{
    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela(){
        $row = $this->lista->getVoluntario();
        foreach ($row as $value){
            echo "<tr>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['cpf'] ."</td>";
            echo "<td>".$value['telefone'] ."</td>";
            echo "<td>".$value['Especialidade'] ."</td>";
            echo "<td>".$value['tipo'] ."</td>";
            echo "<td>".$value['veiculo'] ."</td>";
            echo "<td>".$value['ex_veiculo'] ."</td>";
            echo "<td>".$value['grupo'] ."</td>";
            echo "<td><a class='btn btn-warning' href='../View/editar_voluntario.php?id=".$value['ID']."'>Editar</a><a class='btn btn-danger' href='../Controller/VoluntarioDeletar.php?id=".$value['ID']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

class listarRespController{
    private $lista;

    public function __construct($id_resp){
        $this->lista = new Banco();
        $this->criarSelect($id_resp);

    }

    //Método chamado na inclusão e alteração de abrigos 
    //para montar um combobox de Pessoas Resposáveis pelo abrigo
    //Inclusão: $id_resp = -1
    //Alteração: $id_resp = id_responsavel
    private function criarSelect($id_resp){

        $row = $this->lista->getResponsaveis();
        echo "<select name='id_responsavel'>";
        foreach ($row as $value){
            echo "<option value='".$value['id']."'";
            if ($id_resp > 0 && $id_resp == $value['id']){
                echo " selected ";
            }
            
            echo ">".$value['nome']."</option>";
        }
        echo "</select>";
    }
}