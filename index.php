 <?php
$bdcon=mysqli_connect("localhost","root","","student_info");

if(isset($_POST['register'])){
    $sname=$_POST['sname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $query="INSERT INTO `register`( `sname`, `username`, `email`, `mobile`, `password`) VALUES ('$sname','$username','$email','$mobile','password')";
    $query_result=mysqli_query($bdcon,$query);
    if($query_result){
        echo '
        <script>
        alert("Succesfully Inserted");
        window.location.href="index.php";
        
        
        </script>

        ';
        $sname=false;
    $username=false;
    $email=false;
    $mobile=false;
    $password=false;
    }
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register-Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Register-Form</h1>
        <form method="post">
        <div class="input-group">
                <input type="text" placeholder="Name" name="sname">
                <span><i id="icon1" class="fa fa-address-book"></i></span>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username">
                <span><i id="icon2" class="fa fa-user"></i></span>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email">
                <span><i id="icon3" class="fa fa-envelope"></i></span>
            </div>
            <div class="input-group">
                <input type="tel" placeholder="Mobile Number" name="mobile" >
                <span><i id="icon4" class="fa fa-phone"></i></span>
               
            </div>
            <div class="input-group">
                <input type="password"  placeholder="Password" name="password">
                <span><i id="icon6" class="fa fa-lock"></i></span>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Confirm Password" >
                <span><i id="icon7" class="fa fa-lock"></i></span>
                
            </div>
        
          <button type="submit" name="register">Register</button>
         <h3>Alredy have an account?<a href="">Login</a></h3>


        </form>

    </div>
</body>
</html>