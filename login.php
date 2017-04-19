<?php

class login {

	 public function __construct()
    {
        //parent::__construct();
    }

	function findIfExistingUser($name, $password){
		global $dbn;
		$existing_user_query = "SELECT * FROM users WHERE users.name = '$name' AND users.ps = unhex(sha1('$password'));";
		$result = mysqli_query($dbn, $existing_user_query);
		if(mysqli_num_rows($result) == 1){
			return true;
		}
		else{
			echo "<script>alert('User Name or Password Incorrect')</script>";
			session_destroy();
	    	return false;
		}

	}

	function resetPass($email , $password){
		global $dbn;
		$update_password = "UPDATE users set users.ps = unhex(sha1('$password')) WHERE users.email = '$email';";
		$update_result = mysqli_query($dbn,$update_password);
		session_destroy();
		if($update_result) return true;
          else  return false;

	}
	function addNewUser($name , $email , $password){
		global $dbn;

			$existing_user_query = "SELECT name FROM users WHERE users.name = '$name';";
			$result = mysqli_query($dbn, $existing_user_query);
			$existing_email_query = "SELECT email FROM users WHERE users.name = '$email';";
			$email_result = mysqli_query($dbn, $existing_user_query);
			error_log(mysqli_num_rows($result));
			error_log(mysqli_num_rows($email_result));

			if(mysqli_num_rows($result) == 1 || mysqli_num_rows($email_result) == 1){
				if(mysqli_num_rows($result)){
					echo "<script>alert('User Name Already existing!! Choose a different name')</script>";
				}
				else{
					echo "<script>alert('Entered Email is already registered')</script>";

				}
				return false;
			}
			else{
				$insert_user_query = "INSERT INTO `users` (`id`, `name`, `email`, `ps`, `last_modified`) 
				VALUES (NULL, '$name', '$email', unhex(sha1('$password')), CURRENT_TIMESTAMP);";
				$insert_result = mysqli_query($dbn,$insert_user_query);
				if($insert_result) {
					echo "<script>alert('New user created')</script>";
					return true;
				}

	          	else  return false;
			}
	}
}

?>