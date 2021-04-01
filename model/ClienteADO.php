<?php

require_once 'model/ClienteTO.php';

class ClienteADO extends ClienteTO {

    protected $sqlInsert = "insert into leonardoandrade_cliente(nome, cpf, telefone, celular, email, dataNascimento)  values ('%s', '%s', '%s', '%s', '%s', '%s')";
    protected $sqlUpdate = "update leonardoandrade_cliente set nome = '%s', cpf = '%s', telefone = '%s', celular = '%s', email = '%s'  where id_cliente = %s";
    protected $sqlSelect = "select * from leonardoandrade_cliente %s ";
    protected $sqlDelete= "delete  from leonardoandrade_cliente where id_cliente =  %s";

    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNome(), $this->getcpf(),  $this->gettelefone(), $this->getCelular(), $this->getEmail(), $this->getDataNascimento());
        
        return $this->runExec($sql);
    }

    public function update() {
        
        $sql = sprintf($this->sqlUpdate, $this->getNome(), $this->getcpf(), $this->gettelefone(), $this->getCelular(), $this->getEmail(), $this->getId());
       
        return $this->runExec($sql);
            }

    public function select($options = "") {
        $sql = sprintf($this->sqlSelect, $options);
      
        return $this->runQuery($sql);
    }
    
    public function delete() {
        
        $sql = sprintf($this->sqlDelete, $this->getId());
        return $this->runExec($sql);
    }
    

    public function load() {
        $reg = $this->select("where id_cliente = " . $this->getId());
        $this->setNome($reg[0] ['nome']);
        $this->setCelular($reg[0] ['celular']);
        $this->setCpf($reg[0] ['cpf']);
        $this->setTelefone($reg[0] ['telefone']);
        $this->setEmail($reg[0] ['email']);
      
        return $this;
    }

}

?>