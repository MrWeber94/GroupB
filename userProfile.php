<?php 
 
    session_start();
   if(isset($_SESSION['id'])){

?>




<p> Welcome (<?php echo $_SESSION['name'];?>)  </p>
<p> Your id  :  (<?php echo $_SESSION['id'];?>)  </p>



   <p><a href="logout.php">LogOut</a> </p>



<?php }else{

     header('Location: login.php');

} ?>