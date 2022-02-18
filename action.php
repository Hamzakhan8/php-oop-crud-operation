<?php

require_once'dbconfig.php';
$db= new Database();

if(isset($_POST['action']) && $_POST['action'] == "view" )
{
    $output='';
    $data=$db->read();
    print_r($data);
    
    
}
?>