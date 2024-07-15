<?php





$username = $password = $errorMsg = '';
if(isset($_POST['login'])){
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
	
    if(empty($username) || empty($password)){
        $errorMsg = "Username/password is required.";

    }else{

		$query = "SELECT * FROM signUp WHERE email = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $query);
		$data = mysqli_fetch_all($result, MYSQLI_ASSOC);


		if(empty($data)){
			$errorMsg = "Username/password does not match.";
			// die("here we are");
		}else{
	
			$_SESSION['data'] = [
				'username' => $username,
				'password' => $password,
				'isLoggedIn' => true,
			];
	
			header('location: dashboard');
			exit();
	
		}

	}
	
}

	


?>
<a href="../dashboard/dashboard.php"></a>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

	<div class="container mt-5">
		<div class="form-box d-flex flex-column justify-content-center align-items-center">
	    <div class="heading text-center mb-5"><h1>Login </h1></div>

		<form class="row g-3" action="?route=signin" method="POST" enctype="multipart/form-data">
			<span style="color: red;"><?=$errorMsg?></span>
				<div class="form-floating mb-3 col-12">
					<input type="email" class="form-control" name="username" value="<?=$username?>" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating col-12">
					<input type="password" class="form-control" name="password"  id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Password</label>
					<!-- value="
					 <?
					//  =$pass 
					 ?>
					  -->
				</div>

				<div class="d-flex justify-content-center align-items-center mt-4"> <button class="btn btn-primary" type="submit" name="login"> Login</button></div>
          <span> Don't have an account? <a href="<?php SITE_URL ?>signUp">SignUp</a>
			</form>
		</div>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>