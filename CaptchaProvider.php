<?php
include('Captcha.php');
include('Random.php');

class CaptchaProvider {
    
    private  $random;
    function getCaptcha() {
        $leftOperand = $this->random->nextOperand();
        $rightOperand = $this->random->nextOperand();
        $captcha = new Captcha(2, $leftOperand, 2, $rightOperand);
        
        return $captcha;
    }
    function setRandom($random) {
        $this->random = $random;
    }
}
?>
