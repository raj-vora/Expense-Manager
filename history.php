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
      <link rel="stylesheet" href="./stylesheets/main.css">
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
                <li><a href="groups.php">Groups</a></li>
                <li class="active"> <a href="#">History</a></li>
                <form class="navbar-form navbar-left" action="/search" method="POST">
                    <input type="text" name="search_value" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </ul>
            </div>
        </div>
        </nav>
    </body>
</html>
