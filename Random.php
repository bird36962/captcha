<?php

class Random {
    
    function next($min, $max) {
        return rand($min, $max);
    }
    
    function nextOperand() {
        return rand(1, 9);
    }
}
?>
