<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
class Bus{
    // database connection and table name
    private $conn;
    private $table_name="bus";
 
    // object properties
    public $id;
    public $username;
    public $start;
    public $destination;
    public $seats;
    public $tripdate;
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
                    id=:id,username=:username,start=:start, destination=:destination, seats=:seats,tripdate=:tripdate,created=:created";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->start=htmlspecialchars(strip_tags($this->start));
        $this->destination=htmlspecialchars(strip_tags($this->destination));
        $this->seats=htmlspecialchars(strip_tags($this->seats));
        $this->tripdate=htmlspecialchars(strip_tags($this->tripdate));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        // bind values
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":start", $this->start);
        $stmt->bindParam(":destination", $this->destination);
        $stmt->bindParam(":seats", $this->seats);
        $stmt->bindParam(":tripdate", $this->tripdate);
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
