<?php

$customerName =$_POST['customerName'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "CustomerName:".$customerName."<br/>";
echo "email:".$email."<br/>";
echo "message:".$message."<br/>";



// challenge level 1
// $strip=strrpos($customerName, ";");
// if ($strip === false  ){
//
// } else {
//   echo "bad";
//   eval($customerName);
// }



// challenge level 2
// $strip=strrpos($email, ";");
// if ($strip === false  ){
//
// }
//
// else {
//
//   if ($strip !== false ){
//     echo "bad";
//     $email = "";
//   }else{
//     eval(urldecode($email));
//   }
// }


//challenge level 3
// eval($message);

// challenge level 4
// if ($message == "phpinfo();"){
//   $message = "";
// }
// eval(urldecode($message));


// challenge 5
// if ($message == "phpinfo()%3B"){
//   $message = "";
// }
//
// $find_sem=strrpos($message, ";");
// echo $find_sem;
//
// if ($find_sem === false){
//   echo "good";
//   $message = "";
// } else {
//   $message = "";
// }
//
// eval($message);
//
 ?>
