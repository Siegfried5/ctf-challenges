<?php


$customerName =$_POST['customerName'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "CustomerName:".$customerName."<br/>";
echo "email:".$email."<br/>";
echo "message:".$message."<br/>";


// challenge level 1
eval($customerName);
eval($email);
eval($message);

// challenge level 2
// if ($message == "phpinfo();"){
//   $message = "";
// }
// eval(urldecode($message));


// challenge level 3

// eval($message);

 ?>
