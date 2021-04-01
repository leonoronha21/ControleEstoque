<?php

require_once 'model/FornecedorTO.php';

class FornecedorADO extends FornecedorTO {

    protected $sqlInsert = "insert into leonardoandrade_fornecedor(nome, razao, cnpj, endereco, site, email, telefone)  values ('%s', '%s', '%s', '%s', '%s', '%s', '%s')";
    protected $sqlUpdate = "update leonardoandrade_fornecedor set nome = '%s', razao = '%s', cnpj= '%s', endereco='%s', site='%s', email='%s', telefone='%s'  where id_fornecedor = %s";
    protected $sqlSelect = "select * from leonardoandrade_fornecedor %s ";
    protected $sqlDelete= "delete  from leonardoandrade_fornecedor where id_fornecedor =  %s";

    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNomeFantasia(),$this->getrazao(), $this->getCnpj(),$this->getEndereco(), $this->getSite(), $this->getEmail_fornecedor(), $this->getTelefone_fornecedor());
        
        return $this->runExec($sql);
    }

    public function update() {
        
        $sql = sprintf($this->sqlInsert, $this->getNomeFantasia(),$this->getrazao(), $this->getCnpj(),$this->getEndereco(), $this->getSite(), $this->getEmail_fornecedor(), $this->getTelefone_fornecedor(), $this->getId_fornecedor());
       
        return $this->runExec($sql);
            }

    public function select($options = "") {
        $sql = sprintf($this->sqlSelect, $options);
      
        return $this->runQuery($sql);
    }
    
    public function delete() {
        
        $sql = sprintf($this->sqlDelete, $this->getId_fornecedor());
        return $this->runExec($sql);
    }
    

    public function load() {
        $reg = $this->select("where id_fornecedor = " . $this->getId_fornecedor());
        $this->setrazao($reg[0] ['razao']);
        $this->setNomeFantasia($reg[0] ['nome']);
        $this->setTelefone(reg[0] ['telefone']);
        $this->setEndereco($reg[0] ['endereco']);
        $this->setSite($reg[0] ['site']);
        $this->setEmail_Fornecedor($reg[0] ['email']);
        $this->setCnpj($reg[0] ['cnpj']);
      
        return $this;
    }

}

?>