<?php 
     require 'connection.php';

     $id =  filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT); 

     $sql  = "select * from users where id = ".$id;

      $op =   mysqli_query($con,$sql);

      if($op){

        $data = mysqli_fetch_assoc($op);
      }else{
          echo 'No data related to this id ';
      }

?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Edit User</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
    <body>
    


        <div class="container">
            <h2>Edit User data </h2>
            <form  method="post" action="editAction.php" enctype="multipart/form-data">
    

                 <input type="hidden" value="<?php echo $data['id'];?>" name="id">

                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="name" value="<?php echo $data['name'];?>" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name" required>
                </div> 
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  value="<?php echo $data['email'];?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
    
                <!-- <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div> -->
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address"   value="<?php echo $data['address'];?>"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter address" required>
                </div> 
    
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    
    </body>
    
    </html>