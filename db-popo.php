<?php

  class DBTable {

    private $id;
    private $nome;
    private $marca;
    private $prezzo;
    private $exp;
    public function __construct($row){
      $this -> setId($row['id']);
      $this -> setNome($row['nome']);
      $this -> setMarca($row['marca']);
      $this -> setPrezzo($row['prezzo']);
      $this -> setExp($row['expire']);

    }

    public function getId() {
      return $this -> id;
    }
    public function setId($id) {
      $this -> id = $id;
    }
    public function getNome() {
      return $this -> nome;
    }
    public function setNome($nome) {
      $this -> nome = $nome;
    }
    public function getMarca() {
      return $this -> marca;
    }
    public function setMarca($marca) {
      $this ->  marca = $marca;
    }
    public function getPrezzo() {
      return $this -> prezzo;
    }
    public function setPrezzo($prezzo) {
      $this ->  prezzo = $prezzo;
    }
    public function getExp() {
      return $this -> expire;
    }
    public function setExp($expire) {
      $this ->  expire = $expire;
    }
    public function __toString() {
      return     $this -> getId() . " " .
                 $this ->  getNome() . " " .
                 $this ->  getMarca() . " " .
                 $this ->  getPrezzo() . " " .
                 $this ->  getExp();
    }

  }



 ?>
