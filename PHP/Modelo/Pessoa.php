<?php
    namespace POO\Banco\Modelo;
    
    require_once("Endereco.php");

    class Pessoa{
        //Variáveis
        protected string $CPF;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;

        //Construtores
        public function __construct(string $CPF, string $nome, string $telefone, Endereco $endereco){
            $this->CPF      = $CPF;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }

        //Métodos Gets e Sets
        public function getCPF() : string
        {
            return $this->CPF;
        }//fim do getCPF

        public function getNome() : string
        {
            return $this->nome;
        }//fim do getCPF

        public function getTelefone() : string
        {
            return $this->telefone;
        }//fim do getCPF

        public function getEndereco() : Endereco
        {
            return $this->endereco;
        }//fim do getCPF

        public function setCPF(string $CPF) : void
        {
            $this->cpf = $cpf;
        }//fim do setCPF

        public function setNome(string $nome) : void
        {
            $this->nome = $nome;
        }//fim do setCPF

        public function setTelefone(string $telefone) : void
        {
            $this->telefone = $telefone;
        }//fim do setCPF

        public function setEndereco(Endereco $endereco) : Endereco
        {
            $this->endereco = $endereco;
        }//fim do setCPF

    }//Fim da Classe
?>