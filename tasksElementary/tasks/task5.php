<?php
    class Fibo{
        public $min;
        public $max;

        public function fibonacci($min, $max) {
            if ($min < 3) {
                return 1;
            } else {
                return fibonacci($min-1) + fibonacci($min-2);
            }
        }

        for ($min = 1; $min <= $max; $min++) {
            return $fiboArr = array(fibonacci($min) . ", ");
        }
    }

    $context = new Fibo();
    fibonacci(2, 5);
