<?php
include('Captcha.php');
include('Random.php');

class CaptchaProvider {
    
    private  $random;
    
    function __construct() {
        $this->random = new Random();
    }
    
    function getCaptcha() {
        $pattern = $this->random->nextPattern();
        $leftOperand = $this->random->nextOperand();
        $rightOperand = $this->random->nextOperand();
        $operation = $this->random->nextOperation();
        
        $captcha = new Captcha($pattern, $leftOperand, $operation, $rightOperand);
        
        return $captcha;
    }
    function setRandom($random) {
        $this->random = $random;
    }
}
?>
