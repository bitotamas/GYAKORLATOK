<?php
class TestDB extends \PHPUnit\Framework\TestCase{

    function testConfogDb(){
        include "app/config.php";
        $this->assertEquals(is_object($db),true);
    }
    function testProductClass(){
        include "app/product.class.php";
        include "app/config.php";
        $obj=new Product($db);
        $this->assertEquals(is_object($obj),true);
        //van e id
        $this->assertObjectHasAttribute("id",$obj);
        //van e read metodus
        $this->assertEquals(method_exists($obj,"readRandom"),true);
        //adatellenörzés a product táblában
        $rowNumber=$obj->readRandom()->rowCount();
        $van=$rowNumber>0?true:false;
        $this->assertEquals($van,true);
        $this->assertEquals($rowNumber,8);       
    }
}
?>