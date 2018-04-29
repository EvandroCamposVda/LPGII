<?php

class Produto {
    private $nome;
    private $marca;
    private $valor;
    private $id;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome ($nome){
        $this->nome = $nome;
    }

    public function getNome (){
        return $this->nome;
    }

    public function setMarca ($marca){
        $this->marca = $marca;
    }

    public function getMarca (){
        return $this->marca;
    }

    public function setValor ($valor){
        $this->valor = $valor;
    }

    public function getValor (){
        return $this->valor;
    }
}