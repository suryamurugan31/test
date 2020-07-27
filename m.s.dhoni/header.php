    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
  body {
      padding-right: 0 !important 
       
       }
      
   
    </style>
</head>
<body style="padding:0px">
<div class="row" >
    <div class="header">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
        <img src="images/dhoni-logo.png" width="30px"; height="30px"; alt="M.S.Dhoni">
        </a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="index.php">Home</a></li>
      <li><a href="achievements.php">Achievement</a></li>
      <li><a href="gallery.php">Gallery</a></li>
<!--      <li><a href="#">Contact us</a></li>-->
      <li><a href="#" data-toggle="modal" data-target="#regmodal">Register</a></li>
      <li><a href="#" data-toggle="modal" data-target="#loginmodal">Login</a></li>
       
<!--      <li><a href="login.php">Login</a></li>-->
    </ul>
  </div>
</nav>
    </div>

    <div class="dhoni-image" >
    <img src="images/cricket-banner.jpg" width="100%"; height="100%"; alt="banner"; align-content= "center";>
    
    
    </div>
    
    
 
      
     <div class="modal fade" id="regmodal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <form action="reg.php" method="POST">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Page</h4>
              </div>
            <div class="modal-body">
            <div class="form-group">
                <label> Name</label>
                <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                <label> Email</label>
                <input type="email" name="email" class="form-control">
                </div>
                    <div class="form-group">
                <label> Password</label>
                <input type="password" name="pwd" class="form-control">
                </div>
                        <div class="form-group">
                <label> Favourite Player</label>
                <input type="text" name="player" class="form-control">
                
                    </div>
              </div>
            
              <div class="modal-footer " >
            <center>    <button type="submit" class="btn btn-primary ">Register</button></center>
              </div> 
               
        
            
            
            
            </form>
        </div>
                </div>
            </div>
       
    
    

    <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <form action="validate.php" method="POST">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Page</h4>
              </div>
            <div class="modal-body">
            <div class="form-group">
                <div class="form-group">
                <label> Email</label>
                <input type="email" name="email" class="form-control">
                </div>
                    <div class="form-group">
                <label> Password</label>
                <input type="password" name="pwd" class="form-control">
                </div>
              </div>
              </div>
              <div class="modal-footer" >
              <center>  <button type="submit" class="btn btn-primary">Login</button></center>
              </div> 
                
            
            
            
            </form>
        </div>
                </div>
            </div>
     </div>
</body>
</html>


