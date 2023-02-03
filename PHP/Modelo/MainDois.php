<?php
namespace PHP\Modelo\MainDois;

require_once("DAO/Inserir.php");
require_once("DAO/Conexao.php");
require_once("DAO/Consultar.php");
require_once("DAO/Atualizar.php");

use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Inserir;
use PHP\Modelo\DAO\Consultar;
use PHP\Modelo\DAO\Atualizar;

echo "---Teste banco de dados---<br><br>";

$conexao = new Conexao();

$conexao->Conectar();//Abrindo a conexão com o banco de dados;

$inserir = new Inserir();
echo $inserir->cadastrar($conexao,'Pessoa','Thiago','11968161630');

$consultar = new Consultar();
echo $consultar->consultarIndividual($conexao,'Pessoa',1);

echo $consultar->consultarTudo($conexao,'Pessoa');

$atualizar = new Atualizar();

echo $atualizar->update($conexao, "nome","Maria",1,"Pessoa");
echo $consultar->consultarIndividual($conexao,'Pessoa',1);
?>