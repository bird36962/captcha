<?php
include('CaptchaProvider.php');

class CaptchaProviderTest extends PHPUnit_Framework_TestCase {

    function testCaptchaProviderWithFix2222ForRandom() {
        $captchaProvider = new CaptchaProvider();
        
        $stub = $this->getMock('Random');
        
        $stub->expects($this->exactly(2))
                ->method('nextOperand')
                ->will($this->onConsecutiveCalls(2, 5));
         
        $captchaProvider->setRandom($stub);
        
        $captcha = $captchaProvider->getCaptcha();
        
        $this->assertEquals('2', $captcha->getLeftOperand());
        $this->assertEquals('Five', $captcha->getRightOperand());
        $this->assertEquals('*', $captcha->getOperation());
        $this->assertEquals(10, $captcha->getResult());
    }
}
?>
