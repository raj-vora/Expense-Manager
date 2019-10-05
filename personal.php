<?php
  if(isset($POST_["logout"])){
    // session_start();
    echo "hi";
    session_unset();
    session_destroy();
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Travnal</title>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script type="text/javascript" src="./javascripts/personal.js"></script>
      <link rel="stylesheet" href="./stylesheets/main.css">
      <link rel="stylesheet" href="./stylesheets/personal.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
                <a class="navbar-brand brand" href="#">MoneySplit</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">              
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="/feed">Personal</a></li>
              <li ><a href="#">Groups</a></li>
              <li> <a href="history.php">History</a></li>
              <li>
                <form action="" method="POST">
                  <button type="submit" name="logout" class="btn btn-primary">Log Out</button>
                </form>
              </li>
          </ul>
          </div>
      </div>
    </nav>
    <div>
      <?php
        include_once("Database.class.php");
        include_once("Session.class.php");
        session_start();
          $connection;
          $res;
          global $database;
          $connection = $database->getConnection();
          $u_id = $_SESSION["user_id"];
          $sql = "SELECT amount, created_at FROM expense WHERE user_id = $u_id ORDER BY created_at";
          $res = $database->query($sql);
          if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
              echo $row['amount']," ", $row['created_at'];
              echo "<br>";
            }
          }
          else{
            echo "No result";
          }
      ?>
    </div>
    <div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add another expense
      </button>
    </div>
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Add Another Expense</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body">
            <form id="upload" method='POST' action='./processing.php' enctype="multipart/form-data">
              <div class="file-upload">
                <input type="file" placeholder="Upload Bill" class="form-control" name="attachment"  title="Upload Bill" required="required" aria-required="true">
                <div class="file-upload-content">
                  <img class="file-upload-image" src="#" alt="your image" />
                </div>
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name = "submit">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>