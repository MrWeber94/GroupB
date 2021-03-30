<?php 



   
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    require 'connection.php';

    function clean($str){

        return stripcslashes(htmlspecialchars(trim($str)));
     
       }
     
      
       $name     = clean($_POST['name']);
       $email    = clean($_POST['email']);
       $address  = clean($_POST['address']);
       $id       = $_POST['id'];

     
         // Validation { code }   true  . . . 
     
         $Message = '';
     
            if( empty($name) || empty($email) || empty($address) ){
     
              $Message = "input's length must be > 0"; 
     
            }else{

           // logic . . . 

         $sql = "update users set name='$name' , email = '$email' , address = '$address' where id = ".$id;
          
          $op =  mysqli_query($con,$sql);
          $editMessage = '';
         if($op){
            $editMessage = "record updated . . ";
         }else{
            $editMessage = "error in update";

         }

         $_SESSION['editMessage'] =  $editMessage;
         header("Location: displayUsers.php");

            }





 }else{

    header("Location: index.php");
 }



?>