<?php
include('Captcha.php');

class CaptchaTest extends PHPUnit_Framework_TestCase {
    function test1111ShouldReturn_One_Plus_1 ()  {
        $captcha = new Captcha(1, 1, 1, 1);
        $this->assertEquals("One", $captcha->getLeftOperand());
        $this->assertEquals("+", $captcha->getOperation());
        $this->assertEquals("1", $captcha->getRightOperand());
        $this->assertEquals(2, $captcha->getResult());
    }
    
    function test1121ShouldReturn_One_Multiple_1 () {
        $captcha = new Captcha(1, 1, 2, 1);
        $this->assertEquals("One", $captcha->getLeftOperand());
        $this->assertEquals("*", $captcha->getOperation());
        $this->assertEquals("1", $captcha->getRightOperand());
        $this->assertEquals(1, $captcha->getResult());
        
    }

    function test1125ShouldReturn_One_Multiple_5 () {
        $captcha = new Captcha(1, 1, 2, 5);
        $this->assertEquals("One", $captcha->getLeftOperand());
        $this->assertEquals("*", $captcha->getOperation());
        $this->assertEquals("5", $captcha->getRightOperand());
        $this->assertEquals(5, $captcha->getResult());
        
    }}
?>
