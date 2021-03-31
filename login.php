<?php 
    session_start();

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

  <p><?php   if(isset( $_SESSION['errorMessage'])){  echo  $_SESSION['errorMessage'];  unset( $_SESSION['errorMessage']); }?></p>
        <div class="container">
            <h2>Login</h2>
            <form  method="post" action="loginAction.php" enctype="multipart/form-data">

    
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
    
                <div class="form-group">
                    <label for="exampleInputPassword1"> Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>

    
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    


    </body>
    
    </html>
    