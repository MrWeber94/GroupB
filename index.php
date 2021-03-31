<?php 


//declare(strict_types = 1);

   //
    //   ECHO "welcome to php course  Nti . .".'<br>';    
         
    //   echo "welcome to php course  Nti . .";    


     //  print 'welcome to php course . .';     

     #   print 'welcome to php course . .'; 



    /*
     print 'welcome to php course . .'; 
     print 'welcome to php course . .'; 
     print 'welcome to php course . .'; 
     print 'welcome to php course . .'; 
   */

 
     //  $age = 20;
    //   ECHO $age;
//       echo 'std_age'.$AGE;   error 


   /*
       - data type 
   
       1-int 
       2-double 
       3-boolean true || flase   1 || 0
       4-string 
       5-arrays 
       6-object 
       7-resources 
       8-null        
   */






//     $age = 0;     // int 
//     echo 'age1 >>> '.$age.'<br>';

//     $age = "20 t";   // string 

//    echo $age;

 ///var_dump($age);




    // $studentName = "ahmed";
    // echo 'welcome '.$studentName.' in our App';
      


//      declare(strict_types = 1);

//    function printNumber(int $number = 0):int {

//     return  $number;    
// }

//     echo printNumber(500); 


    //  $age = 20;
    //  $class = "A";


    //   function printName($fName,$lName = null){

    //    global $age,$class;



    //    $message = "welcome to our site ";


    //   //  echo $message.$fName.' '.$lName;
    //   echo $age.' || '.$class;
    //   }
      
    //   echo $age;
    
    //   printName('ahmed');

      


  //   function printNumber(){

  //      static $x = 1;

  //     echo $x.'<br>';

  //     $x++;
  //   }


  //  printNumber();

  //  printNumber();

  //  printNumber();



      // define("size",20,true);


      // echo constant('SIZE').'<br>';
      
      
      
      
      // echo size;


    //  function summ(int $x , int $y) : int{

    //    return $x+$y;

    //  }

    //  echo summ(1,3);

/*
+
-
*
/
%
**
*/




// $x =1;
// $y = 2;


// $x *= $y;    // $x = $x+$y;
// echo $x;



// $x = 2;
// $y = 7;

//      $x = $y;

//      $x  ==  $y   // return true value

//      $x  ===  $y      // return true value , datatype 


//      $x != $y      $x <> $y



//      $x !== $y  

//      $x < $y   
//      $x > $y

//      <= 
//      >=



//$x = 1;

// $x++;   //  >>  $x +=1;   >> $x= $x+1;

// $x--;     // >> $x -=$x;  >> $x = $x-1;



//     // $x++; >>  ++$x;


//     // $x--; >>  --$x;

// echo $x++.'<br>';


// echo  ++$x;






// $x = 2;
// $y = 3;
    
    // and   && 
  //  0 and 1  = 0
  //  1 and 0  = 0
  //  1 and 1  = 1
  //  0 and 0  = 0



// or ||

  //  0 or 1  = 1
  //  1 or 0  = 1
  //  1 or 1  = 1
  //  0 or 0  = 0

    //!


  // if(!($y == 2)  == true) {
  //     // code 
  // }


// xor 
  //  0 xor 1  = 1
  //  1 xor 0  = 1    
  //  1 xor 1  = 0
  //  0 xor 0  = 0




// $x = 1;

// if($x == 3){   // 0 
 
//   echo 'con 1';
 
     
// }elseif($x == 4){
//     echo 'con 2';
// }
// else{
//     // code 
//    echo 'else message '.'<br>';
// }







  

    //  function summ(int $x , int $y){

    //     $result = $x+$y;
      
    //   if($result > 10){
    //       return 'result grater than 10';
    //   }else{
    //       return 'result < 10';
    //   }


    //  }

    //  echo  summ(1,1054);





// $x = 2465454;

//   switch ($x) {
   
//     case '1':
//           echo 'number = 1';
//       break;

//       case '2':
//         echo 'number = 2';
//     break;


//     case '3':
//       echo 'number = 3';
//   break;


    
//     default:
//           echo 'no option founded';
//     break;
//   }





  //  for ($i=0; $i < 3; $i++) { 
  //    # code...
  //    echo 'welcome to our App'.'</br>';

  //  }
 
  // $i = 6;

  // while (true) {
  //   # code...
  //   echo 'welcome to our App'.'</br>';
  //   $i++;

  // }



  // do {
   

  //   echo 'welcome to our App'.'</br>';
  // $i++;
  // } while ($i < 10);




  
 
    // for ($i=1; $i < 10 ; $i++) { 
    //   # code...


    //   if($i == 5){
        
    //   break;


    //   }else{
    //     echo $i;

    //     continue;

    //   }


  //}



      

   $str = "test string TEXT text";
   
   



     // echo   strlen($str);


   //   echo str_word_count($str); 


    //  echo   strrev($str);


    //  echo    strpos($str,"text").'<br>';  //case senstive
    //  echo    stripos($str,"text");   //insenstive
     
    //  echo  str_replace('TEXT','php',$str);

    // var_dump(explode(' ',$str));

    // $arr = ['welcome','to','php'];

    //   echo implode(' ',$arr);

    // $text = 'PHP COURSE';

    // echo    strtolower($text)

    //  print_r(str_split('test',2));


      

    //   $password = "root@1234";
    //  echo  md5($password).'</br>';
    //  echo  md5($password).'</br>';

   //   var_dump(is_int(1));



    // echo pi();


      //  echo   min(2,8,7,0,6);

      //  echo max(8,9,10);

      //  echo round(0.7);   

        // echo  rand(10,100);




//   $color = array("A","B","C");

// $color = ["A",50,2.8]; 


  //    echo $color[0]; 

   //   echo     count($color); 




  // foreach($color as $data){

  //  echo  $data.'<br>';
  // }



  // for ($i=0; $i < count($color); $i++) { 
  //   # code...
  //  echo $color[$i].'<br>';


  // }



    // $name = "Ahmed Ali Ibrahiem";
   
    //  $nameArray =   explode(' ',$name);
   

    //  foreach ($nameArray as $key => $value) {
    //    # code...

    //    echo $key.'-'.$value.'</br>';


    //  }
   
   
   
    //  $studentArray = array("name" => "Ahmed" , "age" => 20 ,"GPA" => 3.4 );

    //  $studentArray = array("ahmed",20,3.4);

    // $studentArray[0];


    //   echo  $studentArray['name'];



    //  foreach ($studentArray as $key => $value) {
    //    # code...

    //    echo $value.'<br>';


    //  }






      //  $studentArray =  array(
      //                   array("ahmed1",15,2.4),
      //                   array("ahmed2",15,2.4),
      //                   array("ahmed3",29,3.2),
      //                   array("ahmed4",22,3.4),
      //                   array("ahmed5",22,3.4)
      //                 );


      //                 for($i = 0; $i< count($studentArray); $i++ ){
      //                  for ($x=0; $x < count($studentArray[$i]) ; $x++) { 
      //                     # code... 

      //                     echo $studentArray[$i][$x].'||';
      //                   }

      //                   echo '<br>';

      //                 }
    
     


        // $student = array('Bi','Akjg','Ckklrtjkro');
         
        // rsort($student);


        //  foreach($student as $std){

        //   echo $std.'<br>'; 
        //  }




  //  $color = [ "name1" => "red" , "name0" => "green" , "name2" => "blue" ];


    //asort($color);
     //arsort($color);


   //  ksort($color);
  //  krsort($color);

  //  foreach($color as $std){

  //         echo $std.'<br>'; 
  //        }



  //   $pro_language = "php c# java  js css css3";   // asc order





  // $x = 3;
  // $y = 4;



  //   function summ(){


  //       $GLOBALS['x']+$GLOBALS['x'];

  //   }


  //   summ();



        // echo $_SERVER['SERVER_NAME'];

       // echo $_SERVER['HTTP_HOST'];
    
      // echo $_SERVER['HTTP_USER_AGENT'];

      //    echo $_SERVER['PHP_SELF'];

      //  echo $_SERVER['REMOTE_ADDR']; // ip user 

      

    //  $_POST[]
    //  $_GET[]



      //  echo 'index file ';

      //  if(isset($_GET['errorMessage'])){
      // echo   $_GET['errorMessage'];
      //  }
  // key => value

    //  $studentArray = array('name' => 'omar','age' => 20,'level' => 4,'Gpa' => 3.5);  // [] 

    //      echo   json_encode($studentArray);



      //  $json_data =  '{"name":"omar","age":20,"level":4,"Gpa":3.5}';

      //      $data =   json_decode($json_data,true);

      //       echo $data['name'];
           // echo $data->name;    


        //   $file =  fopen('file.txt','r') or die('error in open file ');

        //   // $student = json_encode(array('name' => 'omar','age' => 20,'level' => 4,'Gpa' => 3.5));

        //   // if(fwrite($file,$student)){

        //   //   echo 'Your data saved';
      
        //   // }else{
        //   //   echo 'error in saving data ';
        //   // }


        // $data = json_decode(fread($file,filesize('file.txt')),true);
          
        //  foreach($data as $key => $t){
        //    echo $key .' ||  '.$t.'<br>';
        //  }



        //   fclose($file);








    //         $text = "php laravel";

    //         // $pattern = "*laravel*i";
            
    //         // echo preg_match($pattern,$text);

    //     //  $pattern = "/a/i";

    //     // echo  preg_match_all($pattern,$text);

    //     $pattern = "/php/i";

    // echo     preg_replace($pattern,'js',$text);




  // user table    >>> name email password address gender 


  // registration login 
  // after login >>>>> profile (id,name,email,address,gender)






?>










