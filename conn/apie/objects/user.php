<?php
class User{
 
    // database connection and table name
    public $conn;
    public $table_name = "emp";
 
    // object properties
    public $empid;
    public $empname;
    public $password;
    public $birth;
    public $gender; 
    public $address; 
    public $email;
    public $phone; 
    public $qualification; 
    public $designation;
    public $salary; 
    public $basic_pay;
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // login user
    function login(){
        // select all query
        $query = "SELECT
                    `empid`, `password`,`empname`,`birth`,`gender`,`address`,`email`,`phone`,`qualification`,`designation`,`salary`,`basic_pay`
                FROM
                    " . $this->table_name . " 
                WHERE
                    empid='".$this->empid."' AND password='".$this->password."'";
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
                empid='".$this->empid."'";
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