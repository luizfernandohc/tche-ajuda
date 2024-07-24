<?php

require_once("../Model/banco.php");
class procurarController{
    private $procura;

    public function __construct()
    {
        $this->procura = new Banco();
        if (isset($_GET['nome'])) {
            $nome = $_GET['nome'];
            $this->criarTabela($nome);
        } else {
            $this->criarTabela('');
        }
    }

    private function criarTabela($nome){

        $row = $this->procura->procuraAbrigo($nome);
        $i = 1;
        if (!empty($row['nome'])) {
			echo "<thead>";
				echo "<tr>";
					echo "<th>Nome</th>";
					echo "<th>Endereço</th>";
					echo "<th>Responsável</th>";
					echo "<th>Observação</th>";
					echo "<th>Opções</th>";
				echo "</tr>";
			echo "</thead>";
        echo "<tr>";

            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "<td>" . $row['nome_responsavel'] . "</td>";
            echo "<td>" . $row['observacao'] . "</td>";
            echo "<td><p><a class='btn btn-primary' data-toggle='collapse' href='#R" . $i . "' role='button' aria-expanded='false' aria-controls='collapseExample'>Capacidades</a></button><a class='btn btn-warning' href='editar_abrigo.php?id_abrigo=" . $row['id_abrigo'] . "'>Editar</a><a class='btn btn-danger' href='index_move.php?id_abrigo=" . $row['id_abrigo'] . "'>Arquivar</a></td>";
            echo "</tr>";
            if ($row['cozinha'] == 1) {
                $aux = "Tem cozinha";
            } else {
                $aux = "Não tem";
            }
            echo "<tr class='collapse' id='R" . $i . "'><td colspan='10'>Capacidade de Homens: " . $row['c_homens'] . "<br>Capacidade de Mulheres: " . $row['c_mulheres'] . "<br>Capacidade de Crianças: " . $row['c_criancas'] . "<br>Capacidade de pets: " . $row['c_pets'] . "<br>Quantidade de Voluntarios: " . $row['quantidade_v'] . "<br>Área do Estoque: " . $row['area_estoque'] . "m²" . "<br>Cozinha: " . $aux . "<br>Banheiros: " . $row['banheiros'] . " <br></td></tr>";

            $i++;
            echo "</tr>";
        } else {
            echo "<br><p>&nbsp;Nenhum abrigo encontrado.</p>";
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
        foreach ($row as $row) {
            echo "<option row='" . $row['id_abrigo'] . "'";
            if ($id_abrg > 0 && $id_abrg == $row['id_abrigo']) {
                echo " selected ";
            }

            echo ">" . $row['nome'] . "</option>";
        }
        echo "</select>";
    }
}

