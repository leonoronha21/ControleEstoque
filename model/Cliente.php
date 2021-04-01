<?php
require_once 'model/ClienteADO.php';

class Cliente extends ClienteADO{
    
    protected $sqlSelectJoin = "select * from leonardoandrade_cliente %s";
    
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
 


