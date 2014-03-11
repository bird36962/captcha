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
}
?>
