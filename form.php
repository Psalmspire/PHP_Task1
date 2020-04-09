<?php 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$faculty= $_POST['faculty'];
$Mat_no = $_POST['Mat_no'];
$gender = $_POST['gender'];
$other_name = $_POST['other_name'];
  
 $UserData =[
    'first_name'=> $first_name,
    'last_name'=> $last_name,
    'user_name'=> $user_name,
    'email'=> $email,
    'Mat _no'=> $Mat_no,
    'faculty'=> $faculty,
    'gender'=> $gender
  ];

echo file_put_contents("".$user_name.".php", json_encode($UserData));

?> 