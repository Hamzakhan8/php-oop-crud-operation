<!doctype html>
<html lang="en">
  <head>
    <title>php oop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><i class="fa fab-wolf-pack-ballion"></i> zalmi coding</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
       <div class="col-lg-12 ">
         <h3 class="text-center text-danger font-weght-normal ml-3"> crud operation using php-oop ,php pdo , sweet-alert </h3>
       </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h3 class="text-primary"> all user in database</h3>
      </div>
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"> <i class="fas fa-user-plus fa-lg"></i>&nbsp; add new user</button>
        <a href=" " class="btn btn-success m-1 float-right"> <i class="fas fa-table fa-lg"></i>&nbsp; export to excel</a>
      </div>

    </div>
    <hr class="my-1"> 
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive " id="showuser">
        
        </div>
      </div>
    </div>
</div>

 <!--add user Modal -->
<div class="modal " id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">add new user</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body px-4">
        <form action="" method="POST" id="form-data">
          <div class="form-group">
            <input type="text" name="fname" class="form-control" placeholder="first name">
          </div>
          <div class="form-group">
            <input type="text" name="lname" class="form-control" placeholder="last name">
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Phone">
          </div>
         
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <input type="submit" name="insert" id="insert" value="add new user" class="btn btn-danger btn-block">
      </div>

    </div>
  </div>
</div>

 <!-- edit user Modal  -->
<div class="modal " id="editmodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">update user data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body px-4">
        <form action="" method="POST" id="edit-form-data">
          <input type="hidden" name="id" id="id">  
        <div class="form-group">
            <input type="text" name="fname" class="form-control" id="fname">
          </div>
          <div class="form-group">
            <input type="text" name="lname" class="form-control" id="lname">
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" id="phone">
          </div>
         
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <input type="submit" name="update" id="update" value="update user data" class="btn btn-primary btn-block">
      </div>

    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
         
         
          $(document).ready(function(){
            
            showAllUsers();
              function showAllUsers(){
                $.ajax({
                  url:'action.php',
                  type:"POST",
                  data:{action:"view"},
                 
                  success:function(response){

                    //console.log(response);

                    $("#showuser").html(response);
                    $("table").DataTable({
                        order:[0,'desc']

                    });

                      
                    
                  }

                });

              }

              //INSERTING DATA THROUGH AJAX

              $("#insert").click(function(e){

                if($("#form-data")[0].checkValidity()){
                  e.preventDefault(); //stop to submit the form without data

                  $.ajax({
                    url:"action.php",
                    type:"POST",
                    data:$("#form-data").serialize()+"&action=insert",
                    success:function(response){
                         Swal.fire({
                          title: "successfully added!",
                          text: "You clicked the button!",
                          icon: "success",
                         })

                         $("#addModal").modal('hide');
                         $("#form-data")[0].reset();
                         showAllUsers();
                    }
                  });
                }
              })
// edit user

              $("body").on("click",".editBtn",function(e){

                   e.preventDefault();
                   edit_id=$(this).attr('id');
                   $.ajax({

                     url:"action.php",
                     type:"POST",
                     data:{edit_id:edit_id},
                     success:function(response){
                       
                       data=JSON.parse(response);

                       $("#id").val(data.id);
                       $("#fname").val(data.first_name);
                       $("#lname").val(data.last_name);
                       $("#email").val(data.email);
                       $("#phone").val(data.phone);
                       

                     }
                   })
              });  

            //INSERTING DATA THROUGH AJAX

            $("#update").click(function(e){

                if($("#edit-form-data")[0].checkValidity()){
                  e.preventDefault(); //stop to submit the form without data

                  $.ajax({
                    url:"action.php",
                    type:"POST",
                    data:$("#edit-form-data").serialize()+"&action=insert",
                    success:function(response){
                        Swal.fire({
                          title: "successfully updated!",
                         
                          icon: "success",
                        })

                        $("#editmodal").modal('hide');
                        $("#edit-form-data")[0].reset();
                        showAllUsers();
                    }
                  });
                }
                })       

                // delete ajax method
                $("body").on("click",".delBtn",function(e){

                  e.preventDefault();
                  var tr= $(this).closest('tr');
                  del_id=$(this).attr('id');
                  Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                  if (result.isConfirmed) {
                     
                     $.ajax({

                       url:"action.php",
                       type:"POST",
                       data:{del_id:del_id},
                       success:function(response){

                         tr.css('background-color','#ff6666');

                         swal.fire(
                           'deleted!',
                           'user deleted successfully',
                           'success'
                         )
                         showAllUsers();

                       }
                     })
                  }
})

                });


                $("body").on("click",".infoBtn",function(e){


                  e.preventDefault();
                  info_id=$(this).attr('id');
                  $.ajax({
                    url:"action.php",
                    type:"POST",
                    data:{info_id:info_id},
                    success:function(response){
                      console.log(response);
                    }
                  })
                })
         
          });
    </script>
  </body>
</html>