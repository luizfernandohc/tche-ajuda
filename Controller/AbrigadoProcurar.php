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

        $row = $this->procura->GNomeAbrigado($nome);
        $i = 1;
        if (!empty($row['nome'])) {
			echo "<thead>";
				echo "<tr>";
					echo "<th>Nome</th>";
					echo "<th>Telefone</th>";
					echo "<th>Sexo</th>";
					echo "<th>Abrigo Relacionado</th>";
					echo "<th>Observação</th>";
                    echo "<th>Opções</th>";
				echo "</tr>";
			echo "</thead>";
           
            echo "<tr>";
            echo "<td>".$row['nome'] ."</td>";
            echo "<td>".$row['telefone'] ."</td>";
            echo "<td>".$row['sexo'] ."</td>";
            echo "<td>".$row['nome_abrigo'] ."</td>";
            echo "<td>".$row['observacao'] ."</td>";
            echo "<td><p><a class='btn btn-primary' data-toggle='collapse' href='#R" . $i . "' role='button' aria-expanded='false' aria-controls='collapseExample'>Dados</a></button><a class='btn btn-warning' href='editar_abrigado.php?id_abrigado=".$row['id_abrigado']."'>Editar</a><a class='btn btn-danger' href='index_move.php?id_abrigado=".$row['id_abrigado']."'>Arquivar</a></td>";
            echo "</tr>";
            echo "<tr class='collapse' id='R" . $i . "'><td colspan='10'>CPF: ".$row['cpf']."<br>Data de nascimento: ".$row['data_nasc']."<br>Contato: ".$row['contato']."<br>Endereço: ".$row['endereco']."</td></tr>";

            $i++;
            echo "</tr>";
        } else {
            echo "<br>&nbsp;Abrigado não encontrado.";
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

