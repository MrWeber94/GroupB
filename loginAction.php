<?php 

 if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    require 'connection.php';

    function validation($str){

        return stripcslashes(htmlspecialchars(trim($str)));
     
       }

   $email    = validation($_POST['email']);
   $password = htmlspecialchars(trim($_POST['password']));    

     $errorFlag = 0; 

     $messageEmpty = '';
     $messageEmail = '';
     $messagePassword = '';

    if(empty($email) || empty($password)){

        $errorFlag = 1;

        $messageEmpty  = 'empty fields';
    }

    if(filter_var($email,FILTER_VALIDATE_EMAIL) == FALSE){
        $errorFlag = 1;
        $messageEmail = 'Invali email';
    }


    if(strlen($password) < 6){

        $errorFlag = 1;
        $messagePassword = 'Invalid password length , must be >= 6';
    }



   if($errorFlag == 0){
       // code 
      $password = md5($password);
      
      $sql = "select * from users where email = '$email'   and  password = '$password'  ";

      $op =  mysqli_query($con,$sql);
      
      if(mysqli_num_rows($op) == 1 ){

        $data = mysqli_fetch_assoc($op);
      
        $_SESSION['id']   = $data['id'];
        $_SESSION['name'] = $data['name'];

      header('Location: userProfile.php');


      }else{
        $_SESSION['errorMessage'] = 'error in login';

        header('Location: login.php');

      }




   }else{

   $_SESSION['errorMessage'] = $messageEmpty.'<br>'.$messageEmail.'<br>'.$messagePassword ;
   header('Location: login.php');

   }
     










 }else{

   header('Location: login.php'); 
 }



?>