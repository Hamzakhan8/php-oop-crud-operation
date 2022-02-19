<?php

require_once 'dbconfig.php';
$db= new Database();

if(isset($_POST['action']) && $_POST['action'] == "view" ){

    $output = '';
    $data=$db->read();
  
    
    if($db->TotalRowCount()>0){

        $output .='<table class="table table table-striped table-sm table-bordered">

        <thead>
           <tr class="text-center">
             <th>id</th>
             <th>firstname</th>
             <th>lastname</th>
             <th>email</th>
             <th>phone</th>
             <th>action</th>

           </tr>
        </thead>
        <tbody>

        
        ';
        foreach($data as $row){
            $output .='<tr class="text-center text-secondary">
            <td>'.$row['id'].'</td>
            <td>'.$row['first_name'].'</td>
            <td>'.$row['last_name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            <td>
                      <a href="" class="text-success infoBtn" title="view detail" id="'.$row['id'].'"> <i class="fa fa-info-circle fa-lg"></i></a>&nbsp;
                      <a href="" class="text-primary editBtn" title="edit" data-toggle="modal" data-target="#editmodal"  id="'.$row['id'].'" > <i class="fa fa-edit fa-lg"></i></a>&nbsp;
                      <a href="" class="text-danger delBtn" title="delete"  id="'.$row['id'].'"> <i class="fa fa-trash fa-lg"></i></a>
                    </td>
                    </tr>  ';
                }    
            
            $output .='</tbody></table>';
            echo $output;
            }
            
            else{

                echo "<h3>no data</h3>";
            }
            }

            if (isset($_POST['action']) && $_POST['action'] == "insert"){
               
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];

                $db->insert($fname,$lname,$email,$phone);

            }
            if(isset($_POST['edit_id'])){
 
                $id =$_POST['edit_id'];
                $row=$db->getUserById($id);

                echo json_encode($row);
            }
           if(isset($_POST['action']) && $_POST['action'] == "update" ){

                $id=$_POST['id'];
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];

                $db->update($id,$fname,$lname,$email,$phone);
                



            }
            if(isset($_POST['del_id'])){
 
                $id =$_POST['del_id'];
                $row=$db->delete($id);

             
            }



?>