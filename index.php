<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LOGIN FORM</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
   
    <style>
    body{
    background-image: url(back.jpg);
}
form{
    padding-top: 180px;
    text-align: center;
    font-size: 30px;
   
}
h4 a{
    text-decoration:none;
}
h2{
    color:red;
}
.top{
    font-size:50px;
color:yellow;
}


    </style>
</head>
<body>
  <?php
  include'dbcon.php';
  
  
  if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
    
    
    
    
    
    $pass=password_hash($password, PASSWORD_BCRYPT);
    $cpass=password_hash($password, PASSWORD_BCRYPT);
    $emailquery="select * from registrationform where email='$email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($query);
    if($emailcount>0){
    echo "email already exist";
    }else{
    if($password===$cpassword){
        $insertquery =" insert into registrationform(username,email,password,cpassword) values('$username','$email','$pass','$cpass')";
    $iquery=mysqli_query($con,$insertquery);
    if($iquery){
        ?>
        <script>
            alert("inserted sucessfully");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert(" not inserted ");
        </script>
    
        <?php
    }
    
    }else{
        echo "password not matching";
    }
    }
    }
    ?>
   <marquee class="top">WELCOME TO PRASAD SITE</marquee>
 
    <form action="" method="POST">
    
  <H2>  USERNAME :<input  type="text" name="username" placeholder="Username" required><br></h2>
  <H2>   Email:<input type="email" name="email" placeholder="Email" required><br></h2>
  <H2>  PASSWORD :<input type="password" name="password" placeholder="Password" required><br></h2>
  <H2>  CONFORM PASSWORD:<input type="password" name="cpassword" placeholder="Confirm password" required><br></h2>
  <H2>  <input type="submit" name="Submit" required >
        <h4>already have an account<a href="LOGINFORM.php"> LOGIN</a><h4>
</form>
</body>
</html>
