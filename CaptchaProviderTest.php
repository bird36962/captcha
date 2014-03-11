<?php
include('CaptchaProvider.php');

class CaptchaProviderTest extends PHPUnit_Framework_TestCase {

    function testCaptchaProviderWithFix2225ForRandom() {
        $captchaProvider = new CaptchaProvider();
        
        $stub = $this->getMock('Random');
        
        $stub->expects($this->exactly(2))
                ->method('nextOperand')
                ->will($this->onConsecutiveCalls(2, 5));
        
        $stub->expects($this->once())
                ->method('nextPattern')
                ->will($this->returnValue(2));
        
        $stub->expects($this->once())
                ->method('nextOperation')
                ->will($this->returnValue(2));
         
        $captchaProvider->setRandom($stub);
        
        $captcha = $captchaProvider->getCaptcha();
        
        $this->assertEquals('2', $captcha->getLeftOperand());
        $this->assertEquals('Five', $captcha->getRightOperand());
        $this->assertEquals('*', $captcha->getOperation());
        $this->assertEquals(10, $captcha->getResult());
    }
    
    function testCaptchaProviderWithFix1534ForRandom() {
        $captchaProvider = new CaptchaProvider();
        
        $stub = $this->getMock('Random');
        
        $stub->expects($this->exactly(2))
                ->method('nextOperand')
                ->will($this->onConsecutiveCalls(5, 4));
        
        $stub->expects($this->once())
                ->method('nextPattern')
                ->will($this->returnValue(1));
        
        $stub->expects($this->once())
                ->method('nextOperation')
                ->will($this->returnValue(3));
         
        $captchaProvider->setRandom($stub);
        
        $captcha = $captchaProvider->getCaptcha();
        
        $this->assertEquals('Five', $captcha->getLeftOperand());
        $this->assertEquals('4', $captcha->getRightOperand());
        $this->assertEquals('-', $captcha->getOperation());
        $this->assertEquals(1, $captcha->getResult());
    }
}
?>
