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
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $pwd = $_POST['password'];
      //for encrypt password...
      $str_pwd = password_hash($pwd,PASSWORD_BCRYPT);
      $phone = $_POST['phone'];
      $course = $_POST['course'];
      $s = $_POST['subject'];
      $sub = implode(",",$s);
      $h = $_POST['hobby'];
      $hby = implode(",",$h);  

      $fetch = "SELECT * FROM student_details WHERE email='$email' and phone='$phone'";
      $res = $conn->query($fetch);
      $row = mysqli_num_rows($res);
         if( mysqli_num_rows($res) < 0){
           
            $ins="INSERT INTO student_details SET name='$name',email='$email',password='$str_pwd',phone='$phone',course='$course',subject='$sub',hobby='$hby'";
            $conn->query($ins);
            // var_dump( $ins);
            header('location:../index.php');
                  
         } else {
            $result = mysqli_fetch_array($res);
               // if($result['email'] == $email or $result['phone'] == $phone){
             
               echo  "<script type='text/javascript'>alert('email  already registered');
               window.location='registration.php';
               </script>";     
               // }
               // if($result['phone'] == $phone){
             
               //    echo  "<script type='text/javascript'>alert(' phone no already registered');
               //    window.location='registration.php';
               //    </script>";     
               //    }
            }
           
         }
   }


  
?>