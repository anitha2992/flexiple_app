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
    <caption><center><h1>Registered User</h1></center></caption>
    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/angular.min.js"></script>

    <div class="container">
        <div class="control-group col-sm-12">
        <form method="post" action="login_check.php">
            <div class="form-group row">
         		<label class="col-sm-4 control-label">User Name</label>
          		<div class="col-sm-4">
            		<input class="form-control" type="text" pattern="flexiple_.[a-z_].*" placeholder="User Name" id="inputUsername" name="name">
                    <br>
          		</div>
        	</div>
        	<div class="form-group row">
         		<label class="col-sm-4 control-label">Password</label>
          		<div class="col-sm-4">
            		<input class="form-control" type="password" pattern="(?=(.*[`!@#$%\^&*\-_=\+'/\.,]){2}).*(?=(.*[A-Z]){2})" minlength="4" maxlength="8" placeholder="Password" id="inputPassword" name="ps">
          		</div>
                <br>
        	</div>
        	<div class="form-group">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success pull-right">Login</button>
                    <br>
                    <br>
                </div>
            </div>
            <div class="form-group">
                <a href="resetpassword.php" id="forgot-password-link" target="">Forgotten account?</a>
                <span role="presentation" aria-hidden="true"> · </span>
                <a href="addUser.php" rel="nofollow" id="reg-link">Sign up for Flexiple</a>
            </div>
        </form>
        </div>
    </div>
</body>
</html>