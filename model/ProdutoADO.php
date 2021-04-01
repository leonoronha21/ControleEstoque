<?php

require_once 'model/ProdutoTO.php';

class ProdutoADO extends ProdutoTO {

    protected $sqlInsert = "insert into leonardoandrade_produto(nome, preco, quantidade, descricao)  values ('%s', '%s', '%s', '%s')";
    protected $sqlUpdate = "update leonardoandrade_produto set nome = '%s', preco = '%s', quantidade = '%s', descricao = '%s' where id_produto = %s";
    protected $sqlSelect = "select * from leonardoandrade_produto %s ";
    protected $sqlDelete= "delete  from leonardoandrade_produto where id_produto =  %s";

    public function insert() {
        $sql = sprintf($this->sqlInsert,$this->getNome_produto(), $this->getPreco(), $this->getQuantidade(), $this->getDescricao());
        
        return $this->runExec($sql);
    }

    public function update() {
        
        $sql = sprintf($this->sqlUpdate,  $this->getNome_produto(), $this->getPreco(),  $this->getQuantidade(), $this->getDescricao(), $this->getId_produto());

        return $this->runExec($sql);
            }

    public function select($options = "") {
        $sql = sprintf($this->sqlSelect, $options);
      
        return $this->runQuery($sql);
    }
    
    public function delete() {
        
        $sql = sprintf($this->sqlDelete, $this->getId_produto());
        return $this->runExec($sql);
    }
    

    public function load() {
        $reg = $this->select("where id_produto = " . $this->getId_produto());
        $this->setNome_produto($reg[0] ['nome']);
        $this->setPreco($reg[0] ['preco']);
        $this->setQuantidade($reg[0] ['quantidade']);
        $this->setDescricao($reg[0] ['descricao']);
      
        return $this;
    }

}

?>