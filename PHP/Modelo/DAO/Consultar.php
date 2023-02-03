<?php
namespace PHP\Modelo\DAO;

require_once("Conexao.php");
use PHP\Modelo\DAO\Conexao;

class Consultar{
    public function consultarIndividual(Conexao $conexao, string $nomeTabela, int $codigo){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if($dados["codigo"] == $codigo){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"];
                    return;//Encerrando a operação
                }
                echo "Código digitado não encontrado.";
            }
        }catch(Except $erro){
            echo $erro;
        }
    }

    public function consultarTudo(Conexao $conexao, string $nomeTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "select * from $nomeTabela";
            $result = mysqli_query($conn,$sql);

            while($dados = mysqli_fetch_array($result)){
                if(isset($dados)){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"];
                }
                else{
                    echo "Banco de dados vazio!";
                }
                
            }
            return;//Encerrando a operação
        }catch(Except $erro){
            echo $erro;
        }
    }
}
?>