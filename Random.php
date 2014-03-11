<?php

class Random {
    
    function next($min, $max) {
        return rand($min, $max);
    }
    
    function nextOperand() {
        return rand(1, 9);
    }
    
    function nextPattern() {
        return rand(1, 2);
    }
    
    function nextOperation() {
        return rand(1, 3);
    }
}
?>
