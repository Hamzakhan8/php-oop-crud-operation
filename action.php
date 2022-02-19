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
            if(isset($_POST['info_id'])){
                $id=$_POST['info_id'];
                $row=$db->getUserById($id);
                echo json_encode($row);
            }

                if(isset($_GET['export']) && $_GET['export']=="excel" ){

                    header("Content-Type:application/xls");
                    header("Content-Disposition:attachment;filename=users.xls");
                    header("pragma:no-cache");
                    header("expires:0");
                    $data=$db->read();
                    echo'<table border="1">';
                    echo'<tr>
                                
                    <th>id</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>email</th>
                    <th>phone</th>

                    </tr>';

                    foreach ($data as $row) {

                        echo '<tr>

                        <td>'.$row['id'].'</td>
                        <td>'.$row['first_name'].'</td>
                        <td>'.$row['last_name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['phone'].'</td>



                        
                        </tr>';

                       
                    }
                    echo'</table>';


                }

?>