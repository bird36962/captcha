<?php
class Captcha {
    public $pattern, $leftOperand, $operator, $rightOperand;
    
    
    function __construct($pattern, $leftOperand, $operator, $rightOperand) {
        $this->pattern = $pattern;
        $this->leftOperand = $leftOperand;
        $this->operator = $operator;
        $this->rightOperand = $rightOperand;
        
        
}

    function getLeftOperand() {
        $wordArray = array(
            1 => 'One',
            5 => 'Five',
            8 => 'Eight',
            9 => 'Nine'
            );
        
        if ($this->pattern == 1) {
            $returnLeftOperand  =  $wordArray[$this->leftOperand];
        } else {
            $returnLeftOperand = $this->leftOperand;
        }
        return $returnLeftOperand;
    }
    
    function getOperation() {
        $returnOperator = "*";
        if ($this->operator == 1) {
            $returnOperator = "+";
        }
        elseif($this->operator == 3) {
            $returnOperator = "-";
        }
        return $returnOperator;
    }
    
    function getRightOperand(){
        $wordArray = array(
            1 => 'One',
            5 => 'Five',
            8 => 'Eight',
            9 => 'Nine'
            );
        
        if ($this->pattern == 2) {
            $returnRightOperand  =  $wordArray[$this->rightOperand];
        } else {
            $returnRightOperand = $this->rightOperand;
        }
        return $returnRightOperand;    
    }
    
    function getResult() {
        if ($this->operator == 1) {
            return $this->leftOperand + $this->rightOperand;
        }
        elseif($this->operator == 3) {
            return $this->leftOperand - $this->rightOperand;
        }
        return $this->leftOperand * $this->rightOperand;
    }
}

?>
