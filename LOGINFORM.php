<?php
session_start();
?>
<!DOCTYPE html >
<html>
    <head>
        <title>LOGIN FORM</title>
        <style>
            form{
                padding-top: 180px;
                padding-left:20px;
                margin:50px;
              text-align:center;
              font-size: 25px;
            }
            h2 a{
                list-style: none;
                display: inline-block;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
<?php

include 'dbcon.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $email_search="select * from registrationform where email='$email'";
    $query=mysqli_query($con,$email_search);
    $email_count=mysqli_num_rows($query);
    if($email_count){
        $email_pass=mysqli_fetch_assoc($query);
        $db_pass=$email_pass['password'];
        $pass_decode=password_verify($password,$db_pass);

        if($pass_decode){
            echo "login successfull";
            ?>
            <script>
            location.replace("home.php");
            </script>
            <?php

        }else{
            echo "invalid email";
        }
    }

}

?>





   
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <h2>  EMAIL:<input type="email" name="email" placeholder="email" required><br><br></h2>
          <h2>  PASSWORD;<input type="password" name="password" placeholder="password" required><br><br></h2>
            <BUTTON type="login" name="login">login</BUTTON>
            <h4>Dont have an account please <a href="index.php">signup</h4></a>
        </form>
    </body>
</html>