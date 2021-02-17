<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud Operation</title>

    <!-- Bootstrap -->
    <link href="resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="resource/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="resource/css/animate.css" rel="stylesheet">

    <link href="resource/css/custom.css" rel="stylesheet">

</head>

<body class="login" style="background-image: url('resource/images/background.jpg'); background-size: cover; ">

<?php
  if(isset($_POST['submit']))
  {
      $uname = $_POST['uname'];
      $pass = md5($_POST['upass']);

      $sql = "SELECT * FROM users WHERE uname ='$uname' &&  upass='$pass'";
      include('connection.php');
      $qry = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($qry);
      if($count==1)
      {
        //Assign session Values
        $_SESSION['usr'] = $uname;
        $_SESSION['pas'] = $pass;

          header('Location: dashboard.php');
      }
      else{
          echo "Login Fail";
      }

  }
 
?>

<div>

    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    
    <div class="login_wrapper">

        <div class="animate form login_form">
            <section class="login_content">
                <form action="" method="POST">
                  
                    <h1 class="text-danger">Log in your Account</h1>
                   
                    <div>
                        <input type="text" id="userName" name="uname" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" id="password" name="upass" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Login" class="btn btn-default submit">
                        <div class="seperator">
                        <a class="reset_pass" href="#signup">Lost your password ?</a>
                    </div>

                    <!-- <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                           <a href="#signup" class="to_register text-danger"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br/>
 -->
                        <div>
                            
                            <p>�2020 All Rights Reserved. Attend Pvt. Ltd</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

       </div>
</div>
</body>
</html>