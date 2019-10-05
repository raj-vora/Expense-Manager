<?php
  include_once("Database.class.php");
  include_once("Session.class.php");

  private $connection;
  public function __construct(){
    global $database;
    $this->connection = $database->getConnection();
  }
  
  public function getData(){
    global $database;
    $u_id = $_SESSION['user_id'];
    $sql = "Select amount, created_at From expense Where user_id = $u_id";
    $res = $database->query($sql);
  }
  while($row = mysqli_fetch_assoc($res));
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
              <li> <a href="#">History</a></li>
              <form class="navbar-form navbar-left" action="/search" method="POST">
                  <input type="text" name="search_value" class="form-control" placeholder="Search">
                  <button type="submit" class="btn btn-default">Submit</button>
              </form>
          </ul>
          </div>
      </div>
    </nav>
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
          <div class="file-upload">
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">
                  Upload Bill
                </button>
                <div class="file-upload-content">
                  <img class="file-upload-image" src="#" alt="your image" />
                </div>
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