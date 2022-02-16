<?php

class Database{

    private $dns="mysql:host=localhost;db=php_oop_crud";
    private $user="root";
    private $pass="";
    public $conn;
    
    public function  __construct(){
        try{

            $this->conn=new PDO($this->dns,$this->user,$this->pass);
            
        }
        catch(PDOException $e) {
            echo $e->getMessage();


        }

        
    }

    public function insert($firstname,$lastname,$email,$phone){

        $sql="INSERT INTO users (first_name,last_name,email,phone)  VALUES(:firstname,:lastname,:email,:phone)";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute(['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'phone'=>$phone]);

        return true;


    }

    public function read(){
        $data=array();
        $sql="SELECT * FROM users";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row){

            $data[]=$row;
        }
        return $data;
    }
public function GetUserById($id) {

    $sql="SELECT * FROM users WHERE id=:id";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute(['id=>$id']);

    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}   

public function update($id,$firstname,$lastname,$email,$phone){

    $sql="UPDATE users SET first_name=:firstname, last_name=:lastname, email=:email,phone=:phone  WHERE id=:id";
    $stmt=$this->connt->prepare($sql);
    $stmt->execute(['firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'phone'=>$phone,'id'=>$id]);

    return true ;




}

public function delete($id){
$sql="DELETE FROM users WHERE id=:id";
$stmt=$this->conn->prepare($sql);
$stmt->execute(['id'=>$id]);

return true;

}
public function TotalRowCount(){
    $sql="SLECT * FROM  users";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute();
    $t_row=$stmt->rowCount();
    return $t_row;
}

}

$ob=new Database();


?>