<?php
namespace PHP\Modelo\DAO;

class Conexao{
    public function conectar(){
        try{
            $conn = mysqli_connect('localhost','root','','banco');
            if($conn){
                echo "Conectado com sucesso!";
                return $conn;
            }else{
                echo "Erro na conexão com o banco de dados.";
            }
        }catch(Except $erro){
            echo $erro;
        }
    }//Fim do conectar
}//Fim da class
?>