<?php
    namespace POO\Banco\Modelo\Conta;
    require_once("Endereco.php");

    use POO\Banco\Modelo\Pessoa;
    use POO\Banco\Modelo\Endereco;

    class Cliente extends Pessoa{
        //Variáveis
        protected float $mensalidade;

        //Construtor
        public function __construct(string $CPF, string $nome, string $telefone, Endereco $endereco, float $mensalidade){
            parent::__construct($CPF, $nome, $telefone, $endereco);
            $this->mensalidade = $mensalidade;
        }//fim do construtor

        //Métodos gets e sets
        public function getMensalidade() : float
        {
            return $this->mensalidade;
        }//fim do consultar mensalidade

        public function setMensalidade(float $mensalidade) : void
        {
            $this->mensalidade = $mensalidade;
        }//fim do atualizar mensalidade
    }//fim da classe
?>