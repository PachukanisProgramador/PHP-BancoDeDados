<?php
namespace PHP\Modelo\DAO;
require_once("Conexao.php");
use PHP\Modelo\DAO\Conexao;

class Inserir{
    public function cadastrar(Conexao $conexao, string $nomeTabela, string $nome, string $telefone){
        try{
            $conn = $conexao->conectar();//Abrindo conexão com o banco
            $sql = "insert into $nomeTabela (codigo,nome,telefone) values('','$nome','$telefone')";
            $result = mysqli_query($conn,$sql);//Comando que executa a ação do script dentro do banco
            if($result){
                return "<br><br>Inserido com sucesso no banco de dados!";
            }
            return "<br><br>Erro. Não foi inserido no banco de dados.";
        }catch(Except $erro){
            echo $erro;
        }

    }
}


?>