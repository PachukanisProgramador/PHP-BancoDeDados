<?php
    namespace POO\Banco\Modelo\Funcionarios;
    require_once("Endereco.php");

    use POO\Banco\Modelo\Pessoa;
    use POO\Banco\Modelo\Endereco;

    abstract class Funcionario extends Pessoa{
        protected string $matricula;
        protected float $salario;

        public function __construct(string $CPF, string $nome, string $telefone, Endereco $endereco, string $matricula, float $salario){
            //Chamando o construtor da classe pai
            parent::__construct($CPF, $nome, $telefone, $endereco);
            //Instanciando variáveis da classe filha
            $this->matricula = $matricula;
            $this->salario   = $salario;
        }//fim do construtor

        //Métodos Gets e Sets
        public function getMatricula() : string
        {
            return $this->matricula;
        }//fim do getCPF

        public function getSalario() : float
        {
            return $this->salario;
        }//fim do getCPF

        public function setMatricula(string $matricula) : void
        {
            $this->matricula = $matricula;
        }//fim do setCPF

        public function setSalario(string $salario) : float
        {
            $this->salario = $salario;
        }//fim do setCPF

        //Classe não implementada, que obriga a implementação em outras classes
        abstract public function calcularBonificacao(float $salario) : float;
    }//fim da classe funcionario
?>