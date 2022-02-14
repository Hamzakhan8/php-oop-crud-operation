
<?php 
    require_once('dbconfig.php'); 
    $db = new operations();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

  <div class="container mt-4" >
      <div class="row">
          <div class="col-lg-6 m-auto">
              <div class="card">
                  <div class="card header">
                      <?php $db->stored_record();?>
                  <h2>signup form</h2>
                    <form action="" method="POST">
                     <input type="text" name="first" require="required" placeholder="FIRST NAME" class="form-control mb-2">
                     <input type="text" name="last" require="required" placeholder="LAST NAME" class="form-control mb-2">
                     <input type="text" name="user_name" require="required" placeholder="USER NAME" class="form-control mb-2">
                     <input type="text" name="user_email" placeholder="EMAIL" class="form-control mb-2">
                        <div class="card-footer">
                            <button class="btn btn-success" name="btn_save">save</button>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>