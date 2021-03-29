<?php 

session_start();

 
require 'connection.php';    // include

if($_SERVER['REQUEST_METHOD'] == "POST"){

 function validation($str){

   return stripcslashes(htmlspecialchars(trim($str)));

  }

 
  $name     = validation($_POST['name']);
  $email    = validation($_POST['email']);
  $password = md5(validation($_POST['password']));
  $address  = validation($_POST['address']);

    // Validation { code }   true  . . . 

    $Message = '';

       if( empty($name) || empty($email)  || empty($password) || empty($address) ){

         $Message = "input's length must be > 0"; 

       }else{
         $query = "insert into users (name,password,email,address) values('$name','$password','$email','$address')";
         // $query = "insert into users (name,password,email,address) values('".$name."','".$password."','".$email."','".$address."')";
     
     
             $result =   mysqli_query($con,$query);
             if($result){
              $Message =  'data inserted ';
             }else{
              $Message =   'error in insert op';
             }

       }


         $_SESSION['message'] = $Message;

        header('Location: register.php');



}else{

   $errorMessage =  'Error in request method';

   header('Location: index.php?errorMessage='.$errorMessage);


}
  




   






?>