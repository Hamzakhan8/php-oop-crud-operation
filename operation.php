<?php
require_once('dbconfig.php');
$db=new dbconfig();

class operations extends dbconfig {

    public function stored_record(){
        global $db ; 
        if(isset($_POST['save']))
        {
            $firstname=$db->check($_POST['first']);
            $lastname=$db->check($_POST['last']);

            $username=$db->check($_POST['username']);

            $email=$db->check($_POST['useremail']);

if ($this->insert_record($firstname,$lastname,$username, $email))

            echo'<div class="alert alert-success">your record is successfull added</div>';
            
        }

       
    }
   public function insert_record($a,$b,$c,$d)
{
    global $db;
    $query=" INSERT INTO oop (firstname,lastname,username,email) values('$a','$b','$c','$d')";
    $result=mysqli_query($db->connection,$query);

    if($result)
    {
        return true;

    }
    else{
        return false;
    }
}

}


?>