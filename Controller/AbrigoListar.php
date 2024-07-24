<?php

require_once("../Model/banco.php");
class listarController
{
    private $lista;

    public function __construct()
    {
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela()
    {

        $row = $this->lista->getAbrigoNomeResp();
        $i = 1;
        foreach ($row as $value) {
            echo "<tr>";

            echo "<td>" . $value['nome'] . "</td>";
            echo "<td>" . $value['endereco'] . "</td>";
            echo "<td>" . $value['nome_responsavel'] . "</td>";
            echo "<td>" . $value['observacao'] . "</td>";
            echo "<td><p><a class='btn btn-primary' data-toggle='collapse' href='#R" . $i . "' role='button' aria-expanded='false' aria-controls='collapseExample'>Capacidades</a></button><a class='btn btn-warning' href='editar_abrigo.php?id_abrigo=" . $value['id_abrigo'] . "'>Editar</a><a class='btn btn-danger' href='index_move.php?id_abrigo=" . $value['id_abrigo'] . "'>Arquivar</a></td>";
            echo "</tr>";
            //cozinha//
            if ($value['cozinha'] == 1) {
                $aux = "Tem cozinha";
            } else {
                $aux = "Não tem";
            }
            
            echo "<tr class='collapse' id='R" . $i . "'><td colspan='10'>Capacidade de Homens: " . $value['c_homens'] . "<br>Capacidade de Mulheres: " . $value['c_mulheres'] . "<br>Capacidade de Crianças: " . $value['c_criancas'] . "<br>Capacidade de pets: " . $value['c_pets'] . "<br>Quantidade de Voluntarios: " . $value['quantidade_v'] . "<br>Área do Estoque: " . $value['area_estoque'] . "m²" . "<br>Cozinha: " . $aux . "<br>Banheiros: " . $value['banheiros'] . " <br></td></tr>";

            $i++;
            echo "</tr>";
        }
    }
}

class listarAbrigoController
{
    private $lista;

    public function __construct($id_abrg)
    {
        $this->lista = new Banco();
        $this->criarSelect($id_abrg);
    }

    //Método chamado na inclusão e alteração de abrigos 
    //para montar um combobox de Pessoas Resposáveis pelo abrigo
    //Inclusão: $id_resp = -1
    //Alteração: $id_resp = id_responsavel
    private function criarSelect($id_abrg)
    {

        $row = $this->lista->getAbrigo();
        echo "<select name='id_abrigo'>";
        foreach ($row as $value) {
            echo "<option value='" . $value['id_abrigo'] . "'";
            if ($id_abrg > 0 && $id_abrg == $value['id_abrigo']) {
                echo " selected ";
            }

            echo ">" . $value['nome'] . "</option>";
        }
        echo "</select>";
    }
}
