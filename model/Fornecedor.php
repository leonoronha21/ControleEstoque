<?php
require_once 'model/FornecedorADO.php';

class Fornecedor extends FornecedorADO{
    
    protected $sqlSelectJoin = "select * from leonardoandrade_fornecedor %s";
    
    public function selectjoin ($options=""){
        $sql = sprintf($this->sqlSelectJoin, $options);
        return $this->runQuery($sql);
    }
	
    public function inativa() {
        $this->load();
        if ($this->getAtivo() == 1)
            $this->setAtivo (0);
        else
            $this->setAtivo (1);
        $this->update();
    }	
    
}
?>
 


