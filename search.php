<?php 
  
   if($_SERVER['REQUEST_METHOD'] == "GET"){

    require 'connection.php';
  
    if(isset($_GET['name'])){
        $key = htmlspecialchars(trim($_GET['name']));


        $sql = "select * from users where name like '%$key%' order by id desc";

        $op =   mysqli_query($con,$sql);
    
         $count =  mysqli_num_rows($op);
    
         if($count == 0){
    
            echo 'No result matched ';
         }else{
    
    
             while ($data = mysqli_fetch_assoc($op)) {
                 # code...
    
                 echo 'Name : '. $data['name'].'<br>';
             }  


             }

     }



   }
   
  


?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title><?php echo 'register';?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
    <body>
    


        <div class="container">
            <h2>Search</h2>
            <form  method="get" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
    
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" name="name"    value="<?php  if(isset($_GET['name'])){  echo $_GET['name']; }  ?>" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name" required>
                </div> 
    
    
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    
    </body>
    
    </html>
    