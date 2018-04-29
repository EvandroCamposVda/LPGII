<?php

class Empresa {

    private $nome;
    private $cnpj;
    private $endereco;
    private $email;
    private $id;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }

    public function setEmail ($email){
        $this->email = $email;
    }

    public function getEmail (){
        return $this->email;
    }
}