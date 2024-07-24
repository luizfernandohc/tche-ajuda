<?php

require_once("../Model/banco.php");
class listarController{
    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){

        $row = $this->lista->getAbrigado();
        $i = 1;
        foreach ($row as $value){
            echo "<tr>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['telefone'] ."</td>";
            echo "<td>".$value['sexo'] ."</td>";
            echo "<td>".$value['nome_abrigo'] ."</td>";
            echo "<td>".$value['observacao'] ."</td>";
            echo "<td><p><a class='btn btn-primary' data-toggle='collapse' href='#R" . $i . "' role='button' aria-expanded='false' aria-controls='collapseExample'>Dados</a></button><a class='btn btn-warning' href='editar_abrigado.php?id_abrigado=".$value['id_abrigado']."'>Editar</a><a class='btn btn-danger' href='index_move.php?id_abrigado=".$value['id_abrigado']."'>Arquivar</a></td>";
            echo "</tr>";
            echo "<tr class='collapse' id='R" . $i . "'><td colspan='10'>CPF: ".$value['cpf']."<br>Data de nascimento: ".$value['data_nasc']."<br>Contato: ".$value['contato']."<br>Endereço: ".$value['endereco']."</td></tr>";

            $i++;
        }
    }
}
class listarDonoController{
    private $lista;

    public function __construct($id_abrigado){
        $this->lista = new Banco();
        $this->criarSelect($id_abrigado);

    }

    //Método chamado na inclusão e alteração de abrigos 
    //para montar um combobox de Pessoas Resposáveis pelo abrigo
    //Inclusão: $id_resp = -1
    //Alteração: $id_resp = id_responsavel
    private function criarSelect($id_abrigado){

        $row = $this->lista->getDono();
        echo "<select id='id_abrigado 'name='id_abrigado'>";
        foreach ($row as $value){
            echo "<option value='".$value['id_abrigado']."'";
            if ($id_abrigado > 0 && $id_abrigado == $value['id_abrigado']){
                echo " selected ";
            }
            
            echo ">".$value['nome']."</option>";
        }
        echo "</select>";
    }
}
