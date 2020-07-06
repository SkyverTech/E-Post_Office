<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "sales";
 
    // object properties
    // uid, bookdate, fname, faddress, fphoneno, tname, taddress, tphoneno, pweight, amount
    public $product;
    public $amount;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function signup(){

        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    product=:product, amount=:amount";
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->product=htmlspecialchars(strip_tags($this->product));
        $this->amount=htmlspecialchars(strip_tags($this->amount));
    
        // bind values
        $stmt->bindParam(":product", $this->product);
        $stmt->bindParam(":amount", $this->amount);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                uid='".$this->uid."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}