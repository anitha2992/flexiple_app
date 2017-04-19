<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login To Flexiple</title>
    <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">

</head>
<body>
    <caption><center><h1>Reset Password</h1></center></caption>
    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/angular.min.js"></script>
    
    <div ng-app>
        <div class="container">
            <div class="control-group col-sm-20">
            <form method="post" action="login_check.php">
                <div class="form-group row">
                    <label class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="email" placeholder="Email" id="inputEmail" name="email">
                    </div>
                    <br>
                </div>
            	<div class="form-group row">
             		<label class="col-sm-4 control-label">New Password</label>
              		<div class="col-sm-4">
                		<input class="form-control" type="password" pattern="(?=(.*[`!@#$%\^&*\-_=\+'/\.,]){2}).*(?=(.*[A-Z]){2})" minlength="4" maxlength="8" placeholder="Password" id="inputPassword" name="ps">
              		</div>
                    <br>
            	</div>
                <div class="form-group row">
                    <label class="col-sm-4 control-label">Confirm Password</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="password" pattern="(?=(.*[`!@#$%\^&*\-_=\+'/\.,]){2}).*(?=(.*[A-Z]){2})" minlength="4" maxlength="8" placeholder="Confirm Password" id="inputConfirmPassword">
                    </div>
                    <br>
                </div>
            	<div class="form-group">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success pull-right" onclick="return Validate()">Submit</button>
                        <br>
                        <br>
                    </div>
                </div>
                <script type="text/javascript">
                    function Validate() {
                        var password = document.getElementById("inputPassword").value;
                        var confirmPassword = document.getElementById("inputConfirmPassword").value;
                        if (password != confirmPassword) {
                            alert("Passwords do not match.");
                            return false;
                        }
                        return true;
                    }
                </script>
                <br>
                <br>
            </form>
            </div>
        </div>
    </div>
</body>
</html>