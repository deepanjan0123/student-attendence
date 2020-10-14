
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
    <link rel="stylesheet" type="text/css" href="attendence.css">
   
    <title>Document</title>
</head>
<body>
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
                <li><a href="userhome.php"><i class="fa fa-user-o "></i>Profile</a></li>
                <li  style="background-color:rgb(10, 165, 165);"><a href="attendence.php"><i class="fa fa-book"></i>Attendence</a></li>
            </ul>
        </div>
        <div id="profile">
            <!-- <img src="image/wal1.jpg" alt=""> -->
            <div class="choosen-menu-section">
                 <p>Attendence</p>
            </div>
            <div id="section" >
                <div class="pic">
                    <img style="width:100%; height:100%;margin-top:1px;border-radius:50%;" src="image/pic.png" alt="">
                </div>
                <p class="username">DEEPANJAN ADAK</p>
            </div>
            <div class="section3">
                <div class="header">
                     <h2>Student Attendence Sheet</h2>
                </div>
                <div id="attendence">
                   <div class="date">
                        <p id="date-header"><span>Date:</span></p>
                        <p id="date"></p>
                   </div>
                   <div class="student-code">
                        <p id="code-header"><span>Student code:</span></p>
                        <p id="code">BSSE/UT/CS/17/025</p>
                   </div>
                   <div class="atten-table">
                        <table>
                            <tr>
                                <th colspan="5">Subject</th>
                                <th>Time</th>
                                <th>Present</th>
                                <th>Absent</th>
                            </tr>   
                            <tr>
                                <td colspan="5"></td>
                                <td></td>
                                <td>
                                    <label class="contain">
                                    <input type="radio" name="1">
                                    <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="content">
                                    <input type="radio" name="1">
                                    <span class="checkmark"></span>
                                    </label>
                                </td>
                               
                               
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                               
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                               
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                               
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                               
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                               
                            </tr>
                        </table>
                   </div>
                </div>
                <div class="button-section">
                    <input id="my-button" class="btn btn-primary" type="button" name="submit" value="Submit">
                </div>
            </div>
        </div>
        <!-- <div id="pic"></div>
        <div id="detail"></div>
        <div id="footar"></div>
        style="background-color:blue; height:200px;width:100%;" -->
        
    </div>
   
            <script>
                    n =  new Date();
                    y = n.getFullYear();
                    m = n.getMonth() + 1;
                    d = n.getDate();
                    document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
            </script>
</body>
</html>
