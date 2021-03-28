
 <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){


           $fileTmpName = $_FILES['image']['tmp_name'];
           $fileName = $_FILES['image']['name'];
           $fileSize = $_FILES['image']['size'];
           $fileType = $_FILES['image']['type'];
        
          var_dump($fileSize);


           $fileExt = explode('.',$fileName);    
           
            $count =   count($fileExt);
           
           // $fileExt[1];

           $extension = strtolower($fileExt[$count-1]);
        
             $name = time().$fileExt[0].'.'.$extension;
           
             $allow_ex = array('jpg','gif','png','php','xls','doc');
            
              
if(in_array($extension,$allow_ex)){
      $uploadFolder = './uploads/'; 
      $destPath = $uploadFolder.$name;

      if(move_uploaded_file($fileTmpName,$destPath)){
          echo 'File Uploaded';
      }else{
          echo 'Error in Upload File';
      }

}else{

    echo 'error in file extension';
}




        }
 




 
 ?>




<!DOCTYPE html>
    <html lang="en">
    <head>
        <title><?php echo 'Upload Files';?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
    <body>
    
        <div class="container">
            <h2>Vertical (basic) form</h2>
            <form  method="post" action="<?php echo  htmlspecialchars( $_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputName" aria-describedby=""  required>
                </div> 
  
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    
    </body>
    
    </html>
    