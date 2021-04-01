<?php

require_once 'model/usuarioTO.php';

class usuarioADO extends usuarioTO {

    protected $sqlInsert = "insert into leonardoandrade_usuario(nome, usuario, senha)  values ('%s', '%s', '%s')";
    protected $sqlUpdate = "update leonardoandrade_usuario set nome = '%s', usuario = '%s', senha = '%s' where id_usuario = %s";
    protected $sqlSelect = "select * from leonardoandrade_usuario %s ";
    protected $sqlDelete= "delete  from leonardoandrade_usuario where id_usuario =  %s";

    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNome_usuario(), $this->getUsuario(), $this->getSenha());
        
        return $this->runExec($sql);
    }

    public function update() {
        
        $sql = sprintf($this->sqlUpdate,  $this->getNome_usuario(), $this->getUsuario(), $this->getSenha(), $this->getId_usuario());

        return $this->runExec($sql);
            }

    public function select($options = "") {
        $sql = sprintf($this->sqlSelect, $options);
      
        return $this->runQuery($sql);
    }
    
    public function delete() {

        $sql = sprintf($this->sqlDelete, $this->getId_usuario());
        return $this->runExec($sql);
    }
    

    public function load() {
        $reg = $this->select("where id_usuario = " . $this->getId_usuarioId());
        $this->setNome_usuario($reg[0] ['nome']);
        $this->setUsuario($reg[0] ['usuario']);
        $this->setSenha($reg[0] ['senha']);
        return $this;
    }

}

?>