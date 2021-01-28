<?php
class Product{

    private $conn;
    private $table_name="products";

    public $id;
    public $category;
    public $name;
    public $price;
    public $picture;
    public $description;
    

    public function __construct($db){
        $this->conn=$db;
    }
/*
    function read(){
    $sql="SELECT * from {$this->table_name} order by name";
    $stmt=$this->conn->query($sql);
    return $stmt;
    }
*/
    function readRandom(){
        $sql="SELECT * from {$this->table_name} ORDER BY RAND() LIMIT 8";
        $stmt=$this->conn->query($sql);
        return $stmt;
    }
    function filteredRead($categ){
        $sql="SELECT * from {$this->table_name} where category='{$categ}' order by name";
        $stmt=$this->conn->query($sql);
        return $stmt;
    }
    
}
?>