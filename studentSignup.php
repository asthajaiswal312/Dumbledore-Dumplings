<?php
    
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "partials/_dbconnect.php";
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $exists=false;
    // Check if required fields are empty
    if (empty($username) || empty($password) || empty($cpassword)) {
        // Redirect back to the sign-up form with an error message
        header("Location: studentSignup.php?error=empty_fields");
        exit();}
    if(($password==$cpassword) && $exists==false)
    {
        $sql="INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
            $showAlert=true;
        }
    }
    else{
        $showError="passeord unmatch";
    }
    



//redirection code

if ($conn->query($sql) === TRUE) {
    // Registration successful, redirect the user to the home page
    header("Location: index.html");
    exit();
} else {
    // Registration failed, redirect back to the sign-up form with an error message
    header("Location: studentSignup.php?error=1");
    exit();
}


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentSignup</title>
    <link rel="stylesheet" href="style.css">

    <!--google font links here-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@300;400;800&family=Sacramento&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Yusei+Magic&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <!--header-->
    <header class="header">
        <div class="container2">
            <h1 class="logo">...Wizard's Feast...</h1>
            <nav class="nav">
                <ul>
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="/about.html">About</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </nav>
        </div>
    </header>


    
    <div class="formbackground">
            <!--success alert-->
<?php
if($showAlert){
echo '
<div class="alert alert-success" role="alert">
  <strong>Signed Up successfully!</strong>
</div>
';}
?>
    
    </div>
    <!-- Sign-up form for students -->
    <div id="studentSignUp" class="login-form">
        <h2>Student Sign Up</h2>
        <form action="/studentSignup.php" method="post">
            <label for="signupUsername">Username:</label><br>
            <input type="text" id="signupUsername" name="username"><br>
            <label for="signupPassword">Password:</label><br>
            <input type="password" id="signupPassword" name="password"><br>
            <label for="signupPassword">Confirm Password:</label><br>
            <input type="password" id="signupPassword" name="cpassword"><br><br>
            <input type="submit" value="Sign Up">
        </form>
        <p>Already have an account? <a href="/login.php">Login</a></p>
    </div>

                 
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

                
</body>
</html>