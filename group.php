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
    <div class="row">
        <div class="container">
            <div class="col-md-4"></div>
                <div class="col-md-4 login signin">
                    <form action="">
                        <h3>Name of member<h3>
                        <input type="text" class="form-control"><br>
                        <button class="btn btn-primary signup">Add member</button>
                        <h3>Total Group Members<h3> 
                        <input type="text" class="form-control">  
                    </form>
                    <form action="">
                        <h3>Expenses</h3>        
                            <div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Add another expense
                            </button>
                            </div>
                        <input type="radio" name="demo" id="unequally">
                            <label for="unequally"><h3>Divide Unequally</h3></label><br>
                        <input type="radio" name="demo" id="equally" checked>
                            <label><h3>Divide Equally</h3></label>
                        <div id="unequal" style="display:none">  
                            Group Members
                            <input type="text" class="form-control"><br>
                            <button class="btn btn-primary signup">Confirm</button>
                        </div><br>
                        <div id="equal">
                        Expense<br><br> <input type="text">
                        </div>  
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
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
        <script type="text/javascript" src="./javascripts/group.js"></script>
    </body>
    </html>