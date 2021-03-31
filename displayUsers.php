<?php 

        require 'connection.php';


     if(isset($_SESSION['id'])){

        // order by   col   desc asc
        // id  asc , email desc

        // limit  
        // like

       // top   >>> limit  



        
        $sql = "select * from users  order by id asc ";

        $op =  mysqli_query($con,$sql);   // object 

         // $data = mysqli_fetch_assoc($op)


?>



<!DOCTYPE HTML>
<html>

<head>
    <title> Read Users</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }
        
        .m-b-1em {
            margin-bottom: 1em;
        }
        
        .m-l-1em {
            margin-left: 1em;
        }
        
        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">

     <p> <?php 
     
     if(isset($_SESSION['deleteMesssage'])){ echo $_SESSION['deleteMesssage'];    unset($_SESSION['deleteMesssage']);   }
    if(isset($_SESSION['editMessage'])){ echo $_SESSION['editMessage'];    unset($_SESSION['editMessage']);   }?>
    
    
    </p>


        <div class="page-header">
            <h1>Read Users || <a href="register.php">Register User</a></h1>

        </div>

        <!-- PHP code to read records will be here -->


        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>email</th>
                <th>Action</th>
            </tr>

     <?php   
     
           while ($data = mysqli_fetch_assoc($op)) {
               # code...
             echo '
            <tr>
             <td>'.$data['id'].'</td>
             <td>'.$data['name'].'</td>
             <td>'.$data['address'].'</td>
             <td>'.$data['email'].'</td>
             <td>';
             if($_SESSION['id'] !== $data['id'] ){
            echo  '<a href="delete.php?id='.$data['id'].'" class="btn btn-danger m-r-1em">Delete</a>';
             }
             echo '<a href="edit.php?id='.$data['id'].'" class="btn btn-primary m-r-1em">Edit</a> </td>

            </tr>';

           }
     
     
     
     ?>
            



            <!-- table body will be here -->

            <!-- <a href='' class='btn btn-danger m-r-1em'>Delete</a>
            <a href='' class='btn btn-primary m-r-1em'>Edit</a> -->


            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>


<?php }else{


header('Location: login.php');



}?>