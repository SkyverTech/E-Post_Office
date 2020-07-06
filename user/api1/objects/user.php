<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "user";
 
    // object properties
    public $uid;
    public $uname;
    public $password;
    public $birth;
    public $gender; 
    public $address; 
    public $email;
    public $phone; 
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function signup(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    uid=:uid, uname=:uname, password=:password, birth=:birth, gender=:gender,address=:address, email=:email, phone=:phone";
   
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->uid=htmlspecialchars(strip_tags($this->uid));
        $this->uname=htmlspecialchars(strip_tags($this->uname));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->birth=htmlspecialchars(strip_tags($this->birth));
        $this->gender=htmlspecialchars(strip_tags($this->gender));
        $this->address=htmlspecialchars(strip_tags($this->address));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->phone=htmlspecialchars(strip_tags($this->phone));
    
        // bind values
        $stmt->bindParam(":uid", $this->uid);
        $stmt->bindParam(":uname", $this->uname);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":birth", $this->birth);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":phone", $this->phone);
    
        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
    function login(){
        // select all query
        $query = "SELECT
                    `uid`,`uname`,`password`,`birth`,`gender`,`address`,`email`,`phone`
                FROM
                    " . $this->table_name . " 
                WHERE
                    uid='".$this->uid."' AND password='".$this->password."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
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