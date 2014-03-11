<?php
require_once('Random.php');

class RandomTest extends PHPUnit_Framework_TestCase {
    function testRandom() {
        $random = new Random();
        $randomData = $random->next(1,2);
        $this->assertTrue($randomData >= 1 && $randomData <= 2);
    }
}
?>
