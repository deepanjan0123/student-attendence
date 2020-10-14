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
    <title>Registration</title>
</head>
<body>
    <div class="container">
            <div class="row">
                
                    <div class="col-lg-12 ">
                        <form  class="form-horizontal" method="POST" action="route.php">
                        <input type="hidden" name="route"  value="register">
                            <h2 class="text-center">Register Here All</h2><br>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Name:</label>
                                <div class="col-sm-5">
                                <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-sm-4">Email:</label>
                                <div class="col-sm-5">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                </div>    
                            </div>
                            <div class="form-group">
                            <label class="control-label col-sm-4">Password:</label>
                            <div class="col-sm-5">
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>  
                            </div>
                            </div>
                            <div class="form-group">
                               <label class="control-label col-sm-4">Phone:</label>
                            <div class="col-sm-5">
                                    <input type="number" name="phone" class="form-control" placeholder="Enter your phone number" required>  
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="cars">Course:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="course" id="course">
                                        <option value="Mechanical">Mechanical</option>
                                        <option value="Civil">CIvil</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Electrical">Electrical</option>
                                        <option value="Computer Science">Computer Science</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" >Subject:</label>
                                    <div class="col-sm-5">
                                        <input type="checkbox" id="subject1" name="subject[]" value="Mathametics">
                                        <label class="checkbox_label" for="subject1"> Mathametics</label><br>
                                        <input type="checkbox" id="subject2" name="subject[]" value="physics">
                                        <label  class="checkbox_label"  for="subject2"> physics</label><br>
                                        <input type="checkbox" id="subject3" name="subject[]" value="chemistry">
                                        <label  class="checkbox_label"  for="subject3">chemistry</label><br>
                                        <input type="checkbox" id="subject3" name="subject[]" value="Bengali & Engish">
                                        <label  class="checkbox_label"  for="subject3"> Bengali & Engish</label>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" >hobby:</label>
                                    <div class="col-sm-4">
                                        <input type="checkbox" id="hobby1" name="hobby[]" value="football">
                                        <label  class="checkbox_label"  for="hobby1">football</label><br>
                                        <input type="checkbox" id="hobby2" name="hobby[]" value="cricket">
                                        <label  class="checkbox_label"  for="hobby2">cricket</label><br>
                                        <input type="checkbox" id="hobby3" name="hobby[]" value="listen music">
                                        <label  class="checkbox_label"  for="hobby3">listen music</label><br>
                                        <input type="checkbox" id="hobby4" name="hobby[]" value="driving">
                                        <label  class="checkbox_label"  for="hobby4">driving</label>
                                    </div>
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <input type="submit" name="ok" class="btn-primary btn"  value="Submit">
                            </div>

                        </form>
                    </div>
            </div>
    </div>
</body>
</html>