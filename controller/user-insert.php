<?php
//  if(isset($_POST['ok'])){

//     include('../config/connection.php');

//     
//     
//     $h=$_POST['hobby'];
//     $hby=implode(",",$h);


//     
//     $conn->query($ins);
//     var_dump($ins);

//     echo"Data inserted sucessfully";
//  }
include_once '../config/connection.php';

class Registration {
   function addUser($request) {
      //database instance
      $db = new Database();
      //function of the database connection
      $conn = $db->getConnection();
      
      $name=$_POST['name'];
      
      $email=$_POST['email'];
      $pwd=$_POST['password'];
      $str_pwd=password_hash($pwd,PASSWORD_BCRYPT);
      $phone=$_POST['phone'];
      $course=$_POST['course'];
      $s=$_POST['subject'];
      $sub=implode(",",$s);
      $h=$_POST['hobby'];
      $hby=implode(",",$h);

      // $email_verify="SELECT  email= '$email' FROM student_details";
      // if($email==$email_verify){
         
      // }
      $ins="INSERT INTO student_details SET name='$name',email='$email',password='$str_pwd',phone='$phone',course='$course',subject='$sub',hobby='$hby'";
      $conn->query($ins);
      // var_dump( $ins);
      header('location:../index.php');
   }
}

  
?>