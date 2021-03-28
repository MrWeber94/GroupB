<?php 
     session_start();
     
   $nameErrorMessage = '';
   if($_SERVER['REQUEST_METHOD'] == "POST"){
     
    // CODE 

 //htmlspecialchars

      $name     = validation($_POST['name']);
      $email    = $_POST['email'];     
      $password = $_POST['password'];



      if(empty($name)){
        $nameErrorMessage = "empty name";
      }


    
      echo ' Name :  '.$name.'<br>'.'email : '.$email.'<br> password : '.md5($password);
   }

    function validation($str){

     return stripcslashes(htmlspecialchars(trim($str)));


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
            <h2>Vertical (basic) form</h2>
            <form  method="post" action="action.php" enctype="multipart/form-data">
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Name   *<?php echo $nameErrorMessage;?></label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name" required>
                </div> 
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
    
                <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
    
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    
    </body>
    
    </html>
    



















    <?php 
    

          $_SESSION['name'] = "Omar Ahmed";

          $_SESSION['age'] = 20;
          

        // filter . . .


        // $age  = 1212;

        //  if(filter_var($age,FILTER_VALIDATE_INT)){

        //     echo 'valid number';
        //  }else{
        //      echo 'not Number';
        //  }
    
    
        // $email = "/////test.fci208@gmail.com";


        // $email = filter_var($email,FILTER_SANITIZE_EMAIL);


        //  if(filter_var($email,FILTER_VALIDATE_EMAIL)){

        //    ECHO $email.'<br>';


        //     echo 'valid email';
        //  }else{

        //     echo 'invalid email';
        //  }


        // $url = "http://localhost/Group/register.php";


        //   if(filter_var($url,FILTER_VALIDATE_URL)){

        //     echo 'valid url';
        //   }else{
        //       echo 'invalid url';
        //   }


    // $ip = "127.0.0.1";

    // if(filter_var($ip,FILTER_VALIDATE_IP)){
    //     echo 'Valid Ip';
    // }else{
    //     echo 'Error in ip ';
    // }





    //  foreach(filter_list() as $id => $filter){

    //     echo $filter .'||'.filter_id($filter).'<br>';
    //  }




    // FILTER_VALIDATE_EMAIL

    // FILTER_SANITIZE_EMAIL




     




    
    ?>