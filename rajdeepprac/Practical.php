<?php
class Practical {
    /**
     * This is a static function that prints "Hello World".
     */
    public static function printHello() {
        echo "Hello World";
    }

    /**
     * This is a static function that returns the sum of two numbers.
     *
     * @param int $num1 The first number.
     * @param int $num2 The second number.
     *
     * @return int The sum of the two numbers.
     */
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    /**
     * This is a static function that returns an array containing the first n numbers in the Fibonacci sequence.
     *
     * @param int $n The number of elements to generate in the sequence.
     *
     * @return array An array containing the first n numbers in the Fibonacci sequence.
     */
    public static function generateFibonacciSequence($n) {
        if (!is_int($n)) {
            throw new InvalidArgumentException('Input must be an integer.');
        }
        if ($n < 0) {
            throw new InvalidArgumentException('Input must be a positive integer.');
        }
        $sequence = array();
        for ($i = 0; $i < $n; $i++) {
            if ($i == 0) {
                $sequence[] = 0;
            } else if ($i == 1) {
                $sequence[] = 1;
            } else {
                $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
            }
        }
        return $sequence;
    }
}

