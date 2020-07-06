<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "posts";
 
    // object properties
    // uid, bookdate, fname, faddress, fphoneno, tname, taddress, tphoneno, pweight, amount
    public $uid;
    public $bookdate;
    public $fname;
    public $faddress;
    public $fphoneno; 
    public $tname; 
    public $taddress;
    public $tphoneno; 
    public $pweight; 
    public $amount; 
    public $status='pending';
    public $empid='Not Yet Assigned';
    public $disdate='Not Yet Dispatched';
 
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
                    uid=:uid, bookdate=:bookdate, fname=:fname, faddress=:faddress, fphoneno=:fphoneno,tname=:tname, taddress=:taddress, tphoneno=:tphoneno, pweight=:pweight, amount=:amount, empid=:empid, disdate=:disdate, status=:status";
   
        // prepare query
    // uid, bookdate, fname, faddress, fphoneno, tname, taddress, tphoneno, pweight, amount, empid, disdate
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->uid=htmlspecialchars(strip_tags($this->uid));
        $this->bookdate=htmlspecialchars(strip_tags($this->bookdate));
        $this->fname=htmlspecialchars(strip_tags($this->fname));
        $this->faddress=htmlspecialchars(strip_tags($this->faddress));
        $this->fphoneno=htmlspecialchars(strip_tags($this->fphoneno));
        $this->tname=htmlspecialchars(strip_tags($this->tname));
        $this->taddress=htmlspecialchars(strip_tags($this->taddress));
        $this->tphoneno=htmlspecialchars(strip_tags($this->tphoneno));
        $this->pweight=htmlspecialchars(strip_tags($this->pweight));
        $this->empid=htmlspecialchars(strip_tags($this->empid));
        $this->disdate=htmlspecialchars(strip_tags($this->disdate));
        $this->amount=htmlspecialchars(strip_tags($this->amount));
        $this->status=htmlspecialchars(strip_tags($this->status));
    
        // bind values
        $stmt->bindParam(":uid", $this->uid);
        $stmt->bindParam(":bookdate", $this->bookdate);
        $stmt->bindParam(":fname", $this->fname);
        $stmt->bindParam(":faddress", $this->faddress);
        $stmt->bindParam(":fphoneno", $this->fphoneno);
        $stmt->bindParam(":tname", $this->tname);
        $stmt->bindParam(":taddress", $this->taddress);
        $stmt->bindParam(":tphoneno", $this->tphoneno);
        $stmt->bindParam(":pweight", $this->pweight);
        $stmt->bindParam(":empid", $this->empid);
        $stmt->bindParam(":disdate", $this->disdate);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":status", $this->status);
    
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