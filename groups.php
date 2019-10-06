<?php
session_start();
  if(isset($_POST['submit'])){
    include_once("Database.class.php");
    include_once("Session.class.php");
    global $connection;
    $res;
    global $database;
    $connection = $database->getConnection();
    $u_id = $_SESSION["user_id"];
    $g_name = $_POST["group_name"];
    $sql = "INSERT INTO grp (grp_name,user_id) VALUES ('$g_name', $u_id);";
    $res = $database->query($sql);
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
              <li><a href="personal.php">Personal</a></li>
              <li class="active"><a href="#">Groups</a></li>
              <li> <a href="history.php">History</a></li>
              <li> <a href="logout.php">Log Out</a></li>
          </ul>
          </div>
      </div>
    </nav>
    <div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add another group
      </button>
    </div>
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Add Another Group</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="form">
            <form action="" method="POST">
            <p>Group Name <input type="text" name="group_name"><p>
            <button type="submit" name="submit">Add Group</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>