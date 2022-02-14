<?php


require_once('operation.php');
class dbconfig
{   
    public $connection;
    public function __construct(){
        $this->db_connect();
    }
    
    public function db_connect(){

        $this->connection=mysqli_connect('localhost','root','','crud','3306');
        if(mysqli_connect_error())
        {
            die("connect failed");

        }
    }

public function check($a)
{
         $return = mysqli_real_escape_string($this->connection,$a);
         return $return;
}


}


?>