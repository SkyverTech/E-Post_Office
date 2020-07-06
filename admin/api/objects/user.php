<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "emp";
 
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
    // signup user
    function signup(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                empid=:empid, empname=:empname, password=:password, birth=:birth, gender=:gender,address=:address, email=:email, phone=:phone, qualification=:qualification, designation=:designation, salary=:salary, basic_pay=:basic_pay";
   
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->empid=htmlspecialchars(strip_tags($this->empid));
        $this->empname=htmlspecialchars(strip_tags($this->empname));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->birth=htmlspecialchars(strip_tags($this->birth));
        $this->gender=htmlspecialchars(strip_tags($this->gender));
        $this->address=htmlspecialchars(strip_tags($this->address));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->phone=htmlspecialchars(strip_tags($this->phone));
        $this->qualification=htmlspecialchars(strip_tags($this->qualification));
        $this->designation=htmlspecialchars(strip_tags($this->designation));
        $this->salary=htmlspecialchars(strip_tags($this->salary));
        $this->basic_pay=htmlspecialchars(strip_tags($this->basic_pay));
    
        // bind values
        $stmt->bindParam(":empid", $this->empid);
        $stmt->bindParam(":empname", $this->empname);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":birth", $this->birth);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":phone", $this->phone);
        $stmt->bindParam(":qualification", $this->qualification);
        $stmt->bindParam(":designation", $this->designation);
        $stmt->bindParam(":salary", $this->salary);
        $stmt->bindParam(":basic_pay", $this->basic_pay);
    
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