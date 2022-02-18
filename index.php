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
          <table class="table table table-striped table-sm table-bordered">

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
               <?php for ($i=1; $i <= 100; $i++):  ?>
                <tr class="text-center text-secondary">
                    <td><?=$i?></td>
                    <td>hamza</td>
                    <td>khan</td>
                    <td>hk@gmail.com</td>
                    <td>2134234</td>
                    <td>
                      <a href="" class="text-success" title="view detail"> <i class="fa fa-info-circle fa-lg"></i></a>&nbsp;
                      <a href="" class="text-primary" title="edit"> <i class="fa fa-edit fa-lg"></i></a>&nbsp;
                      <a href="" class="text-danger" title="delete"> <i class="fa fa-trash fa-lg"></i></a>
                    </td>

            <?php endfor ?>
                </tr>

              
              </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
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
        <form action="" method="post" id="form-data">
          <div class="form-group">
            <input type="text" name="fname" class="form-control" placeholder="fname">
          </div>
          <div class="form-group">
            <input type="text" name="lname" class="form-control" placeholder="lname">
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="email">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="phone">
          </div>
         
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <input type="submit" name="submit" value="add user" class="btn btn-danger btn-block">
      </div>

    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.4/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
          $(document).ready(function(){
            $("table").DataTable();

              function showAllUsers(){
                $.ajax({
                  url:'action.php',
                  type:"POST",
                  data:{action:"view"},
                 
                  success:function(response){

                    console.log(response);
                  }

                });

              }

           

          });
    </script>
  </body>
</html>