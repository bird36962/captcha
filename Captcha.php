<?php
class Captcha {
    public $pattern, $leftOperand, $operator, $rightOperand;
    
    
    function __construct($pattern, $leftOperand, $operator, $rightOperand) {
        $this->pattern = $pattern;
        $this->leftOperand = $leftOperand;
        $this->operator = $operator;
        $this->rightOpera = $rightOperand;
}

    function getLeftOperand() {
        return "One";
    }
    
    function getOperation() {
        return "+";
    }
    
    function getRightOperand(){
        return "1";
    }
    
    function getResult() {
        return 2;
    }
}

?>
