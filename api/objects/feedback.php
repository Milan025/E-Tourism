<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
class Feedback{
    // database connection and table name
    private $conn;
    private $table_name="feedback";
 
    // object properties
    public $service;
    public $username;
    public $star;
    public $discription;
    public $file;
    public $created;
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
                    service=:service,username=:username,star=:star, discription=:discription, file=:file,created=:created";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->service=htmlspecialchars(strip_tags($this->service));
        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->star=htmlspecialchars(strip_tags($this->star));
        $this->discription=htmlspecialchars(strip_tags($this->discription));
        $this->file=htmlspecialchars(strip_tags($this->file));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":service", $this->service);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":star", $this->star);
        $stmt->bindParam(":discription", $this->discription);
        $stmt->bindParam(":file", $this->file);
        $stmt->bindParam(":created", $this->created);
    
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
