<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    // VOLUNTARIOS //

    public function setVoluntario($nome,$cpf,$telefone,$especialidade,$tipo,$veiculo,$ex_veiculo,$grupo){
        $stmt = $this->mysqli->prepare("INSERT INTO tb_voluntario (`nome`, `cpf`, `telefone`, `especialidade`, `tipo`,`veiculo`,`ex_veiculo`,`grupo`) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss",$nome,$cpf,$telefone,$especialidade,$tipo,$veiculo,$ex_veiculo,$grupo);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getVoluntario(){
        $result = $this->mysqli->query("SELECT * FROM tb_voluntario");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getResponsaveis(){
        $result = $this->mysqli->query("SELECT id, nome FROM tb_voluntario");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function pesquisaVoluntario($id){
        $result = $this->mysqli->query("SELECT * FROM tb_voluntario WHERE `ID` = '".$id."';");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function deleteVoluntario($id){
        if($this->mysqli->query("DELETE FROM `tb_voluntario` WHERE `ID` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }

    public function updateVoluntario($nome,$cpf,$telefone,$especialidade,$tipo,$veiculo,$ex_veiculo,$grupo,$id){
        $stmt = $this->mysqli->prepare("UPDATE `tb_voluntario` SET `nome`=?, `cpf`=?, `telefone`=?, `especialidade`=?, `tipo`=?,`veiculo`=?,`ex_veiculo`=?,`grupo`=? WHERE `ID`=?");
        $stmt->bind_param("sssssssss",$nome,$cpf,$telefone,$especialidade,$tipo,$veiculo,$ex_veiculo,$grupo,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
    
    // GRUPOS //

    public function getGrupos(){
        $result = $this->mysqli->query("SELECT * FROM tb_grupos");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function pesquisaGrupo($id){
        $result = $this->mysqli->query("SELECT * FROM tb_grupos WHERE `ID_grupo` = '".$id."';");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateGrupo($descricao,$id){
        $stmt = $this->mysqli->prepare("UPDATE `tb_grupos` SET `descricao`=? WHERE `ID_grupo`=?");
        $stmt->bind_param("ss",$descricao,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
    public function deleteGrupo($id){
        if($this->mysqli->query("DELETE FROM `tb_grupos` WHERE `ID_grupo` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }
    }

    // ABRIGO //
    public function setAbrigo($nome, $endereco, $c_homens, $c_mulheres, $c_criancas, $c_pets, $quantidade_v, $id_responsavel, $area_estoque, $cozinha, $banheiros, $observacao){
        $stmt = $this->mysqli->prepare("INSERT INTO `tb_abrigo` (`nome`,`endereco`,`c_homens`,`c_mulheres`,`c_criancas`,`c_pets`,`quantidade_v`,`id_responsavel`,`area_estoque`,`cozinha`, `banheiros`, `observacao`)VALUES(?,?,?,?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssiiiiiisiis",$nome, $endereco, $c_homens, $c_mulheres, $c_criancas, $c_pets, $quantidade_v, $id_responsavel, $area_estoque, $cozinha, $banheiros, $observacao);
        
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getAbrigoNomeResp(){
        $result = $this->mysqli->query("SELECT tb_abrigo.id_abrigo, tb_abrigo.nome, tb_abrigo.endereco, tb_abrigo.observacao, tb_voluntario.nome AS nome_responsavel,tb_abrigo.c_homens,tb_abrigo.c_mulheres,tb_abrigo.c_criancas,tb_abrigo.c_pets,tb_abrigo.quantidade_v,tb_abrigo.area_estoque,tb_abrigo.cozinha,tb_abrigo.banheiros FROM tb_abrigo, tb_voluntario WHERE tb_abrigo.id_responsavel = tb_voluntario.ID;");

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function pesquisaAbrigo($id_abrigo){

        $result = $this->mysqli->query("SELECT * FROM tb_abrigo WHERE id_abrigo='$id_abrigo'");
        return $result->fetch_array(MYSQLI_ASSOC);
        

    }

    public function procuraAbrigo($nome){

        $result = $this->mysqli->query("SELECT tb_abrigo.id_abrigo, tb_abrigo.nome, tb_abrigo.endereco, tb_abrigo.observacao, tb_voluntario.nome AS nome_responsavel,tb_abrigo.c_homens,tb_abrigo.c_mulheres,tb_abrigo.c_criancas,tb_abrigo.c_pets,tb_abrigo.quantidade_v,tb_abrigo.area_estoque,tb_abrigo.cozinha,tb_abrigo.banheiros FROM tb_abrigo, tb_voluntario WHERE tb_abrigo.nome like '%$nome%'");
        return $result->fetch_array(MYSQLI_ASSOC); 
    }

    public function updateAbrigo($nome, $endereco, $c_homens, $c_mulheres, $c_criancas, $c_pets, $quantidade_v, $id_responsavel, $area_estoque, $cozinha, $banheiros, $observacao,$id_abrigo){
        $stmt = $this->mysqli->prepare("UPDATE `tb_abrigo` SET `nome`=?, `endereco`=?, `c_homens`=?, `c_mulheres`=?, `c_criancas`=?,`c_pets`=?, `quantidade_v`=?, `id_responsavel`=?, `area_estoque`=?, `cozinha`=?, `banheiros`=?, `observacao`=?  WHERE `id_abrigo` = ?");
        $stmt->bind_param("ssiiiiiiiiisi",$nome, $endereco, $c_homens, $c_mulheres, $c_criancas, $c_pets, $quantidade_v, $id_responsavel, $area_estoque, $cozinha, $banheiros, $observacao,$id_abrigo);
        
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
    public function getAbrigo(){
        $result = $this->mysqli->query("SELECT id_abrigo, nome FROM tb_abrigo");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }


    //ABRIGADO
    public function setAbrigado($nome, $cpf, $telefone, $sexo, $data_nasc, $endereco, $contato, $id_abrigo, $observacao){
        $stmt = $this->mysqli->prepare("INSERT INTO `tb_abrigado` (`nome`,`cpf`,`telefone`,`sexo`,`data_nasc`,`endereco`,`contato`, `id_abrigo`, `observacao`)VALUES(?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("sssssssss",$nome, $cpf, $telefone, $sexo, $data_nasc, $endereco, $contato, $id_abrigo, $observacao);
        
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getAbrigado(){
        $result = $this->mysqli->query("SELECT tb_abrigado.id_abrigado, tb_abrigado.nome, tb_abrigado.cpf, tb_abrigado.telefone, tb_abrigado.sexo, tb_abrigado.data_nasc, tb_abrigado.endereco, tb_abrigado.contato, tb_abrigado.observacao, tb_abrigo.nome AS nome_abrigo FROM tb_abrigado, tb_abrigo WHERE tb_abrigado.id_abrigo = tb_abrigo.id_abrigo;");

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
    
    public function getAbrigoAbrigado(){
        $result = $this->mysqli->query("SELECT id_abrigo, nome FROM tb_abrigo");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function GNomeAbrigado($nome){
        $result = $this->mysqli->query("SELECT tb_abrigado.id_abrigado, tb_abrigado.nome, tb_abrigado.cpf, tb_abrigado.telefone, tb_abrigado.sexo, tb_abrigado.data_nasc, tb_abrigado.endereco, tb_abrigado.contato, tb_abrigado.observacao, tb_abrigo.nome AS nome_abrigo FROM tb_abrigado, tb_abrigo WHERE tb_abrigado.nome like '%$nome%' ");

        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function pesquisaAbrigado($id_abrigado){

        $result = $this->mysqli->query("SELECT * FROM tb_abrigado WHERE id_abrigado='$id_abrigado'");
        return $result->fetch_array(MYSQLI_ASSOC);
        
    }

    public function updateAbrigado($nome, $cpf, $telefone, $sexo, $data_nasc, $endereco, $contato, $id_abrigo, $observacao,$id_abrigado){
        $stmt = $this->mysqli->prepare("UPDATE `tb_abrigado` SET `nome`=?, `cpf`=?, `telefone`=?, `sexo`=?, `data_nasc`=?,`endereco`=?, `contato`=?, `id_abrigo`=?, `observacao`=? WHERE `id_abrigado` = ?");
        $stmt->bind_param("ssssssssss",$nome, $cpf, $telefone, $sexo, $data_nasc, $endereco, $contato, $id_abrigo, $observacao,$id_abrigado);
        
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function getDono(){
        $result = $this->mysqli->query("SELECT id_abrigado, nome FROM tb_abrigado");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }


    // PET //

    public function setPet($tipo,$nome,$porte,$sexo,$idade,$id_abrigado,$castrado,$agressividade,$obs){
        $stmt = $this->mysqli->prepare("INSERT INTO tb_pet (tipo,nome,porte,sexo,idade,id_abrigado,castrado,agressividade,obs)VALUES(?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("sssssssss",$tipo,$nome,$porte,$sexo,$idade,$id_abrigado,$castrado,$agressividade,$obs);
        
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getPet(){
        $result = $this->mysqli->query("SELECT * FROM tb_pet;");

        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function getNomeAbrigado(){
        $result = $this->mysqli->query("SELECT tb_pet.id_pet, tb_pet.tipo,tb_pet.nome,tb_pet.porte,tb_pet.sexo,tb_pet.idade,tb_abrigado.nome AS nome_abrigado, tb_pet.castrado, tb_pet.agressividade, tb_pet.obs FROM tb_pet,tb_abrigado WHERE tb_pet.dono = tb_abrigado.id_abrigado;");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }

    public function updatePet($tipo, $nome, $porte, $sexo, $idade, $id_abrigado, $castrado, $agressividade, $obs, $id_pet){
        $stmt = $this->mysqli->prepare("UPDATE `tb_pet` SET `tipo`=?, `nome`=?, `porte`=?, `sexo`=?, `idade`=?,`dono`=?, `castrado`=?, `agressividade`=?, `obs`=? WHERE `id_pet` = ?");
        $stmt->bind_param("ssssssssss",$tipo, $nome, $porte, $sexo, $idade, $id_abrigado, $castrado, $agressividade, $obs, $id_pet);
        
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }

    public function pesquisaPet($id_pet){

        $result = $this->mysqli->query("SELECT * FROM tb_pet WHERE id_pet='$id_pet'");
        return $result->fetch_array(MYSQLI_ASSOC);
        
    }



    


    


}



?>
