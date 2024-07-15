<?php


$fname=$lname=$email=$password=$phn_num=$error="";
$isDataReady= true;

if(isset($_POST['submitt'])){
$fname = !(empty($_POST['fname'])) ? $_POST['fname'] : "";
$lname = !(empty($_POST['lname'])) ? $_POST['lname'] : "";
$email = !(empty($_POST['email'])) ? $_POST['email'] : "";
$password = !(empty($_POST['password'])) ? $_POST['password'] : "";
$phn_num = !(empty($_POST['phn_num'])) ? $_POST['phn_num'] : "";


if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['phn_num'])){
    $error = "All the fields are required";
    $isDataReady = false;
}


if($isDataReady){
$insert = "INSERT INTO `signUp`( `fname`, `lname`, `Email`, `password`, `phone_num`) VALUES ('$fname','$lname','$email','$password','$phn_num')";
$result = mysqli_query($conn ,$insert);


if ($result) {
  header("location: ./signIn.php");
} else {
    echo "failed";
}
}
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="heading text-center mb-5"><h1>Sign Up</h1></div>
        <div class="form-box d-flex flex-column justify-content-center align-items-center ">
            <form class="row g-3" action="signup.php" method="POST" enctype="multipart/form-data">
            <span style="color: red;"><?= $error ?></span>
                <div class="form-floating col-6">
					<input type="text" class="form-control"  name="fname" value="<?=$fname?>" id="floatingfname" placeholder="First Name">
					<label for="floatingfname">First Name</label>
				</div>
                <div class="form-floating col-6">
					<input type="text" class="form-control" name="lname" value="<?=$lname?>" id="floatinglname" placeholder="Last Name">
					<label for="floatingfname">Last Name</label>
				</div>
                <div class="form-floating mb-3 col-12">
					<input type="email" class="form-control" name="email" value="<?=$email?>" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating col-12">
					<input type="password" class="form-control" name="password" value="<?=$password?>"id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Password</label>
				</div>
                <div class="form-floating col-12">
					<input type="number" class="form-control" name="phn_num" value="<?=$phn_num?>" id="floatingnumber" placeholder="Phone Number">
					<label for="floatingfname">Phone Number</label>
				</div>
                
                <div class="d-flex justify-content-center align-items-center mt-4"> <button class="btn btn-primary" type="submit" name="submitt"> signUp</button></div>

                <span> Already have an account? <a href="<?php SITE_URL ?>signIn">Login</a> here</span>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>