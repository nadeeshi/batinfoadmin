<?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>




<!DOCTYPE html>
<html>

<head>
    <title>Bat Facts</title>
    <meta charset="utf-8">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link href="assets/css/index.css" rel='stylesheet' type='text/css' />



    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->




    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>
<body>

<!-----start-main---->
<div class="login-form">
    <div class="head">

        <img src="assets/images/003.jpg" />

    </div>
    <form name="loginform" action="assets/includedFiles/login_exec.php" method="post">

            <li>
                <td colspan="2">
                    <!--the code bellow is used to display the message of the input validation-->
                    <?php
                    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                        echo '<ul class="err">';
                        foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                            echo '<li>',$msg,'</li>';
                        }
                        echo '</ul>';
                        unset($_SESSION['ERRMSG_ARR']);
                    }
                    ?>
                </td>
            </li>


            <li>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span><!--for get small icon-->
                    <input type="text"  name="username" class="form-control" placeholder="Enter Username " required/><!--for get input field-->
                </div>

            </li>

            <li>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                    <input type="password" name="password" class="form-control"  placeholder="Enter Password" required/>
                </div>
            </li>





        <div class="p-container">
            <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>

            <input name="" type="submit" class="btn btn-primary"  value="login" />
            <div class="clear"> </div>
        </div>
    </form>
</div>
<!--//End-login-form-->
<!-----start-copyright---->
<div class="copy-right">
    <p>Created by <a href="">UCSC</a></p>
</div>
<!-----//end-copyright---->

</body>
</html>
