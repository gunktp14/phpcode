<?php

    include 'Calculator.php';

    use PHPUnit\Framework\TestCase;

    class Test_calculator extends TestCase {
        public function testAddNumber(){
            $c1 = new Calculator();
            $this->assertEquals(15,$c1->addNumber(5,10));
        }   

    }

?>