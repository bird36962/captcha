<?php
class Captcha {
    public $pattern, $leftOperand, $operator, $rightOperand;
    
    public $wordArray = array(
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine'
            );
    
    public $plusOperator = 1;
    public $minusOperator = 3;
        
    function __construct($pattern, $leftOperand, $operator, $rightOperand) {
        $this->pattern = $pattern;
        $this->leftOperand = $leftOperand;
        $this->operator = $operator;
        $this->rightOperand = $rightOperand;
    }

    function getLeftOperand() {
        if ($this->pattern == 1) {
            $returnLeftOperand  =  $this->wordArray[$this->leftOperand];
        } else {
            $returnLeftOperand = $this->leftOperand;
        }
        return $returnLeftOperand;
    }
    
    function getOperation() {
        $returnOperator = "*";
        if ($this->operator == $this->plusOperator) {
            $returnOperator = "+";
        } elseif ($this->operator == $this->minusOperator) {
            $returnOperator = "-";
        }
        return $returnOperator;
    }
    
    function getRightOperand(){
        
        if ($this->pattern == 2) {
            $returnRightOperand  =  $this->wordArray[$this->rightOperand];
        } else {
            $returnRightOperand = $this->rightOperand;
        }
        return $returnRightOperand;    
    }
    
    function getResult() {
        if ($this->operator == $this->plusOperator) {
            return $this->leftOperand + $this->rightOperand;
        } elseif ($this->operator == $this->minusOperator) {
            $minusResult = $this->leftOperand - $this->rightOperand;
            if ($minusResult < 0) {
                throw new NegativeResultException();
            }
            return $minusResult;
        }
        return $this->leftOperand * $this->rightOperand;
    }
}

?>
