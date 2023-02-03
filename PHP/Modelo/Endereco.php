<?php
    namespace POO\Banco\Modelo;

    class Endereco{
        public string $rua;
        public string $numero;
        public string $bairro;
        public string $cidade;
        public string $estado;
        public string $uf;
        public string $pais;

        //construtor
        public function __construct(string $rua, string $numero, string $bairro, string $cidade, string $estado, string $uf, string $pais){
            $this->rua    = $rua;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->uf     = $uf;
            $this->pais   = $pais; 
        }//fim do método construtor

        public function getRua() : string
        {
            return $this->rua;
        }//fim do getRua

        public function getNumero() : string
        {
            return $this->numero;
        }//fim do getRua

        public function getBairro() : string
        {
            return $this->bairro;
        }//fim do getRua

        public function getCidade() : string
        {
            return $this->cidade;
        }//fim do getRua

        public function getEstado() : string
        {
            return $this->estado;
        }//fim do getRua

        public function getUF() : string
        {
            return $this->uf;
        }//fim do getRua

        public function getPais() : string
        {
            return $this->pais;
        }//fim do getRua

        public function setRua(string $rua) : void
        {
            $this->rua = $rua;
        }//fim do setRua

        public function setNumero(string $numero) : void
        {
            $this->numero = $numero;
        }//fim do setRua
        public function setBairro(string $bairro) : void
        {
            $this->bairro = $bairro;
        }//fim do setRua
        public function setCidade(string $cidade) : void
        {
            $this->cidade = $cidade;
        }//fim do setRua
        public function setEstado(string $estado) : void
        {
            $this->estado = $estado;
        }//fim do setRua
        public function setUF(string $UF) : void
        {
            $this->UF = $UF;
        }//fim do setRua
        public function setPais(string $pais) : void
        {
            $this->pais = $pais;
        }//fim do setRua

        //Mostrar método como string
        
        public function __toString() : string{
            return "{$this->rua},{$this->numero},{$this->bairro},{$this->cidade}";
        }//Retornar o método que eu quiser

        public function __get(string $nomeDoAtributo) : string{
            return $this->$nomeDoAtributo;
        }//fim do Get 

        public function __set(string $nomeDoAtributo, string $valor) : void{
            $this->$nomeDoAtributo = $valor;
        }//fim do set
    }//fim da classe
?>