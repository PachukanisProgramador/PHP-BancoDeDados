<?php
    namespace POO\Banco\Modelo\Funcionarios;
    require_once("Endereco.php");

    use POO\Banco\Modelo\Endereco;

    class Gerente extends Funcionario{
        protected string $cargo;

        public function __construct(string $CPF, string $nome, string $telefone, Endereco $endereco, string $matricula, string $cargo,float $salario){
            //Construtor da classe pai
            parent::__construct($CPF, $nome, $telefone, $endereco, $matricula, $salario);
            $this->cargo = $cargo;
        }//fim do construtor

        public function getCargo(){
            return $this->cargo;
        }//fim do getCargo

        public function setCargo(string $cargo){
            $this->cargo = $cargo;
        }//fim do setCargo

        public function calcularBonificacao(float $salario) : float{
            return $salario * 0.20;
        }//fim do calcularBonificacao
    }//fim da classe
?>