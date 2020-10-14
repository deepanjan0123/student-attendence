<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="reg.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
        
        <title>login</title>
</head>
<body>
   
    <!-- <img class="background-img" src="../image/wal.jpg" alt=""> -->
    <div class="container">
            <div class="row">
                
                    <div class="col-lg-12 ">
                        <form  class="form-horizontal" method="POST" action="route.php">
                        <input type="hidden" name="route"  value="login">
                            <h2 class="text-center">Login Here </h2><br>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Username:</label>
                                <div class="col-sm-5">
                                <input type="email" name="name" class="form-control" placeholder="Enter your Name" required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-sm-4">Password:</label>
                                <div class="col-sm-5">
                                    <input type="text" name="password" class="form-control" placeholder="Enter your password" required>
                                </div>    
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <input type="submit" name="ok" class="btn-primary btn" value="Submit">
                            </div>
                        </form>
                    </div>
            </div>
    </div>
    
</body>
</html>
