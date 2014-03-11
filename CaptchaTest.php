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
    
    function test1511ShouldReturn_Five_Plus_1 ()  {
        $captcha = new Captcha(1, 5, 1, 1);
        $this->assertEquals("Five", $captcha->getLeftOperand());
        $this->assertEquals("+", $captcha->getOperation());
        $this->assertEquals("1", $captcha->getRightOperand());
        $this->assertEquals(6, $captcha->getResult());
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
        
    }
    
     function test1931ShouldReturn_Nine_Minus_1 () {
        $captcha = new Captcha(1, 9, 3, 1);
        $this->assertEquals("Nine", $captcha->getLeftOperand());
        $this->assertEquals("-", $captcha->getOperation());
        $this->assertEquals("1", $captcha->getRightOperand());
        $this->assertEquals(8, $captcha->getResult());
        
    }
    
     function test1831ShouldReturn_Eight_Minus_1 () {
        $captcha = new Captcha(1, 8, 3, 1);
        $this->assertEquals("Eight", $captcha->getLeftOperand());
        $this->assertEquals("-", $captcha->getOperation());
        $this->assertEquals("1", $captcha->getRightOperand());
        $this->assertEquals(7, $captcha->getResult());
        
    }
 }
?>
