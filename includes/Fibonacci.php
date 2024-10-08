<?php

class Fibonacci {
    public function calculate($n){
        if($n <= 1){
            return $n;
        }
        return $this->calculate(n: $n-1) + $this->calculate(n: $n-2);
    }
}