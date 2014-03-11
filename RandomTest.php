<?php
require_once('Random.php');

class RandomTest extends PHPUnit_Framework_TestCase {
    function testRandom() {
        $random = new Random();
        $randomData = $random->next(1,2);
        $this->assertTrue($randomData >= 1 && $randomData <= 2);
    }
    
    function testRandomOperand() {
        $random = new Random();
        $randomData = $random->nextOperand();
        $this->assertTrue($randomData >= 1 && $randomData <= 9);
    }
 
    function testStubRandom( ) {
        $stub = $this->getMock('Random');
        
        $stub->expects($this->any())
                ->method('next')
                ->will($this->returnValue('2'));
        
        $this->assertEquals('2', $stub->next(500, 1000));
    }
}
?>
