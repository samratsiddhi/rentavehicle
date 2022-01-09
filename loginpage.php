<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <style type="text/css">
        h1
        {
            text-align: center;     
        }
    </style>
</head>


<!-----------------------------------------------------------------login verification--------------------------------------------------------- -->
<?php

if(isset($_POST['pword']))
{
    session_start();
    include('connection.php');

    $email=$_POST['email'];
    $password=$_POST['pword'];

    if(strcmp($email,"admin@gmail.com")==0 && strcmp($password,"admin")==0 ) 
    {
        $_SESSION["email"] = "admin";
        $_SESSION["password"] = "admin";
        header('location:adminindex.php');      
    }

   $sql="SELECT email,password,bannedaccount FROM userinfo";
    $query=mysqli_query($connect,$sql);
    $match=0;

    while ($row=mysqli_fetch_assoc($query))
    {

        if($row['email']==$email)
        {
            $match=1;
            if($row['bannedaccount']=='yes')
            {
                echo "<script>
                        alert('your account is banned for the moment please try later')
                        </script>";
                break;
            }         
          
            if($row['password']==$password)
            {
                

                $_SESSION["email"] = $row['email'];
                $_SESSION["password"] = $row['password'];
                                
                header('location:homepage.php');
                break;      
            }
            else
            {
                echo "<script>
                        alert('password not correct')
                        </script>";
                    

                break;
            }
        }


    }

    if($match==0)
    {
            echo "<script>
                     alert('Account does not exist please sign up first')
                    </script>";
    }
}
?>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w"  method="post">
                    <span class="login100-form-title p-b-32">
                        Rent A Vehicle Login
                    </span>

                    <span class="txt1 p-b-11">
                        Email
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required" required="required">
                        <input class="input100" type="text" name="email" >
                        <span class="focus-input100"></span>
                    </div>
                    
                    <span class="txt1 p-b-11">
                        Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required" required="required">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="pword" >
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="flex-sb-m w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="signuppage.php" class="txt3">
                                Sign Up
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    


</body>
</html>