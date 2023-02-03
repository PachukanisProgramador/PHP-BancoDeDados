<?php
    namespace POO\Banco\Modelo\Conta;
    
    require_once("Endereco.php");
    require_once("Pessoa.php");
    
    use POO\Banco\Modelo\Pessoa;

    class Conta {
        //definir os dados e detalhes de uma Conta
        private string $CPF;
        private float $saldo = 0;

        public function __construct(Pessoa $person, float $saldo)
        {
            $this->CPF = $person->getCPF();
            $this->setSaldo($saldo); 
        }

        //Métodos Get e Set
        public function getSaldo() : float
        {
            return $this->saldo;
        }

        //Métodos Set
        public function setSaldo(float $saldo) : void
        {
            $this->saldo = $saldo;
        }

        //Métodos Get e Set
        public function getCPF() : string
        {
            return $this->CPF;
        }

        //Métodos Set
        public function setCPF(string $CPF) : void
        {
            $this->CPF = $CPF;
        }

        public function Depositar(Conta $cont, float $valor) : void
        {
            $cont->setSaldo($cont->getSaldo() + $valor); 
        }

        public function Sacar(Conta $cont, float $valor):void
        {
            if($cont->getSaldo() >= $valor){
                $cont->setSaldo($cont->getSaldo()-$valor);
                return;
            }
            echo "Impossível sacar, $valor é maior que o saldo disponível";
        }

        public function Transferir(Conta $saque, Conta $cont, float $valor) : void
        {
            $saque->Sacar($saque, $valor);
            $cont->Depositar($cont, $valor);
        }//fim do transferir
    }//fim da classe
?>