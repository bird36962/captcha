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
        $returnLeftOperand  =  "One";
        if($this->leftOperand == 9) {
            $returnLeftOperand  =  'Nine';
        }
        
        return $returnLeftOperand;
    }
    
    function getOperation() {
        if ($this->operator == 1) {
            return "+";
        }
        elseif($this->operator == 3) {
            return "-";
        }
        return "*";
    }
    
    function getRightOperand(){
        return $this->rightOperand;
    }
    
    function getResult() {
        if ($this->operator == 1) {
            return 2;
        }
        elseif($this->operator == 3) {
            return $this->leftOperand - $this->rightOperand;
        }
        return $this->leftOperand * $this->rightOperand;
    }
}

?>
