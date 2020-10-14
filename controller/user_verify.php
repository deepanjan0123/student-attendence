<?php
    session_start();
    include_once '../config/connection.php';
    class Login {
        function userVerify($request){
            $db= new Database;
            $conn=$db->getConnection();

            $username = $_POST['name'];
            $pass = $_POST['password'];
       
            
            $fetch= "SELECT password FROM student_details WHERE email='$username'";
            $res = $conn->query($fetch);
            $row=mysqli_num_rows($res);
            if($row >0){
                $result=mysqli_fetch_array($res);
              //to check both passowrd is correct or not..function password_verify encrypt dial password then check both password is same or not...
                if(password_verify($pass,$result['password'])) {
                    $_SESSION['user'] = $username;
                //   echo  "<script type='text/javascript'>alert('you are sucessfully logged in');
                //     window.location='userhome.php';
                //     </script>";
                    header('Location: userhome.php');
                }
                else {
                    echo  "<script type='text/javascript'>alert('Wrong Username or Password');
                    window.location='login.php';
                    </script>";
                }
            } else {
                echo  "<script type='text/javascript'>alert('you are a new user');
                window.location='registration.php';
                </script>";
            }


        }
    }
?>