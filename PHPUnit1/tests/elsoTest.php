<?php
class Tests extends \PHPUnit\Framework\TestCase{

    function testPrime(){
        
        include "app\prim.php";
        $n=10;
        $this->assertEquals(primeCheck($n),0);
    }


}
?>
