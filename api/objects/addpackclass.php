<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
class Addpackclass{
    // database connection and table name
    private $conn;
    private $table_name="package_list";
 
    // object properties
    
    public $title;
    public $description;
    public $price;
    public $days;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function insertrec(){
    
       
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    title=:title, description=:description, price=:price,days=:days";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->description=htmlspecialchars(strip_tags($this->description));
        $this->price=htmlspecialchars(strip_tags($this->price));
        $this->days=htmlspecialchars(strip_tags($this->days));
        
        // bind values
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":days", $this->days);
        
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
}
?>
    </body>
</html>
