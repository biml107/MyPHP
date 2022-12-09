




 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Insert</title>
    <style>
        .container
        {
            margin-top:50px;
        }
    </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="Index.php">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
              <a class="nav-link" href="CRUDinsert.php">Create</a>
              <a class="nav-link" href="CRUDupdate.php">Update</a>
              <a class="nav-link "  href="CRUDdelete.php">Delete</a>
              <a class="nav-link "  href="CRUDdisplay.php">Display</a>
            </div>
          </div>
        </div>
      </nav>
 



<div class="container">

<form action="CRUDdelete.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Enter The Roll Number of the Student to be Deleted</label>
      <input type="txt" class="form-control" id="inputEmail4" placeholder="Roll Number" name="deleteroll">
    </div>
     
  </div>
   
  
   
    
     
   
  
  <button type="submit" name="Delete" class="btn btn-primary">Delete</button>
   
</form>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> 
<?php
 
if(isset($_POST['Delete']))
{
  include "databaseclass.php";
  $st= new Student();

  echo "Before Deletion";
  echo "<br>";
  $st->read();
  echo "After Deletion";
  echo "<br>";
  $st->delete();

}
 

?>