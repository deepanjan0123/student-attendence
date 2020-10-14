<?php
session_start();
$user = $_SESSION['user'];
if($user === null && empty($user)) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <!-- Optional theme -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

     <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="userhome.css">
   
    <title>Document</title>
</head>
<body>

        <form action="route.php" method="post">
            <input type="hidden" name="route" value="profile">
                <div class="main">
                            <div id="logo">
                                <p>Studence Attendence</p>
                            </div>
                            <nav class="nav navbar-light bg-primary">
                                <div class="container-fluid">
                                    <ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
                                        <input class="btn btn-danger navbar-btn" type="submit" name="logout" value="Logout">    
                                    </ul>
                                </div>
                                
                            </nav>
                            <div id="sidebar">
                                <header>Menu</header>
                                <ul>
                                    <li style="background-color:rgb(10, 165, 165);"><a href="userhome.php"><i class="fa fa-user-o "></i>Profile</a></li>
                                    <li><a href="attendence.php"><i class="fa fa-book"></i>Attendence</a></li>
                                </ul>
                            </div>
                            <div id="profile">
                                <!-- <img src="image/wal1.jpg" alt=""> -->
                                <div class="choosen-menu-section">
                                    <p>profile</p>
                                </div>
                                <div id="section" >
                                    <div class="pic">
                                        <img style="width:100%; height:100%;margin-top:1px;border-radius:50%;" src="image/pic.png" alt="">
                                    </div>
                                    <p class="username">DEEPANJAN ADAK</p>
                                </div>
                                <div class="section2">
                                    <div class="info">
                                        <div class="header">
                                            <p>Stream :</p>
                                        </div>
                                        <div class="header-ans">
                                            <p>Computer science & engineering</p>
                                        </div> 
                                    </div>
                                    <div class="inform">
                                        <div class="header">
                                            <p>Stream :</p>
                                        </div>
                                        <div class="header-ans">
                                            <p>Computer science & engineering</p>
                                        </div> 
                                    </div><div class="info">
                                        <div class="header">
                                            <p>Stream :</p>
                                        </div>
                                        <div class="header-ans">
                                            <p>Computer science & engineering</p>
                                        </div> 
                                    </div>
                                    <div class="inform">
                                        <div class="header">
                                            <p>Stream :</p>
                                        </div>
                                        <div class="header-ans">
                                            <p>Computer science & engineering</p>
                                        </div>   
                                    </div>
                                    <div class="info">
                                        <div class="header">
                                            <p>Stream :</p>
                                        </div>
                                        <div class="header-ans">
                                            <p>Computer science & engineering</p>
                                        </div> 
                                    </div>
                                    <div class="inform">
                                        <div class="header">
                                            <p>Stream :</p>
                                        </div>
                                        <div class="header-ans">
                                            <p>Computer science & engineering</p>
                                        </div>    
                                    </div>
                                    <div class="info">
                                        <div class="header">
                                            <p>Stream :</p>
                                        </div>
                                        <div class="header-ans">
                                            <p>Computer science & engineering</p>
                                        </div>   
                                    </div>
                                    <div class="inform">
                                        <div class="header">
                                            <p>Stream :</p>
                                        </div>
                                        <div class="header-ans">
                                            <p>Computer science & engineering</p>
                                        </div> 
                                    </div>
                                </div>
                        </div>
                    <!-- <div id="pic"></div>
                    <div id="detail"></div>
                    <div id="footar"></div>
                    style="background-color:blue; height:200px;width:100%;" -->
                    
                </div>
        </form>     
</body>
</html>
