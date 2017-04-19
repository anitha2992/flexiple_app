<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logout</title>	
    <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/angular.min.js"></script>
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">

	</head>
	<body>
		<caption><center><h1>WELCOME TO FLEXIPLE</h1></center></caption>
	</body>
	<div ng-app>
        <div class="container">
            <div class="control-group col-sm-20">
            <form method="post" action="login_check.php">
				<div class="form-group">
					<div class="col-sm-4">
					    <button type="submit" class="btn btn-success pull-right" name="logout" id="logout" value="Log Out">LOGOUT</button>
					    <br>
					    <br>
					</div>
				</div>
				<script type="text/javascript">
                    $(document).ready(function(){
			        $('#logout').on('click', function(e){
			            if(confirm("Are you sure you want to logout?"))
			                window.location.href = "http://localhost/Flexiple/registeredLogin.php";

			            return false;
			        });
			    });
                </script>
			</form>
		</div>
	</div>
</html>