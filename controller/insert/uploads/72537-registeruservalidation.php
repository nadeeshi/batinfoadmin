



<?php
// define variables and set to empty values
$fnameErr = $lnameErr  = $nicErr = $mobileErr = $cphoneErr = $passwordErr = $cpasswordErr = $emailErr = $cemailErr = "";
$fname = $lname  = $nic  = $mobile = $cphone = $password = $cpassword = $email = $cemail =   "";
$course = array();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $variables = array();
    $variables = initialize();
    $errors = array();
    $errors = validate_errors($variables);

    if (count($errors) == 0) {

    }
}
function clean($data) {
    $data = strip_tags(htmlspecialchars(stripslashes(trim($data))));
    return $data;
}

function initialize(){
    $var = array();
    $var['fname'] = clean($_POST['fname']);
    $var['lname'] = clean($_POST['lname']);
    $var['nic'] = clean($_POST['nic']);
    $var['mobile'] = clean($_POST['mobile']);
    $var['cphone'] = clean($_POST['cphone']);
    $var['password'] = clean($_POST['password']);
    $var['cpassword'] = clean($_POST['cpassword']);
    $var['email'] = clean($_POST['email']);
    $var['cemail'] = clean($_POST['cemail']);


    return $var;
}

function validate_errors($var) {    //is an array being passed into this function??have a look at arg of validateFirstName.
    $errors = array();

    $errors['fname'] = validateFirstName($var['fname']);//should return error string or ''
    $errors['lname'] = validateLastName($var['lname']);
    $errors['nic'] = validateNIC($var['nic']);
    $errors['mobile'] = validateMobile($var['mobile']);
    $errors['cphone'] = validateConfirmMobile($var['cphone']);
    $errors['password'] = validatePassword($var['password']);
    $errors['cpassword'] = validateConfirmPassword($var['cpassword']);
    $errors['email'] = validateEmail($var['email']);
    $errors['cemail'] = validateConfirmEmail($var['cemail']);


    return $errors;
}

function validateFirstName($firstname){

    if(empty($firstname)){
        global $fnameErr;
        $fnameErr = "First name is required";
        return $fnameErr;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $firstname)){ // check if name only contains letters and whitespace.Performs a regular expression match
        global $fnameErr;
        $fnameErr = "Only letters are allowed";
        return $fnameErr;
    } else {
        global $fname;
        $fname = $firstname;
        return '';
    }
}

function validateLastName($lastname){

    if(empty($lastname)){
        global $lnameErr;
        $lnameErr = "Last name is required";
        return $lnameErr;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $lastname)){ // check if name only contains letters and whitespace.Performs a regular expression match
        global $lnameErr;
        $lnameErr = "Only letters are allowed";
        return $lnameErr;
    } else {
        global $lname;
        $lname = $lastname;
        return '';
    }
}


function validateNIC($nicNo) {

    if(empty($nicNo)) {
        global $nicErr;
        $nicErr = "Username is required";
        return $nicErr;
    } else if (!preg_match("/^\d{9}$/", $nicNo)){ // checks if username contains only letters and digits
        global $nicErr;
        $nicErr = "you have entered Invalid NIC ";
        return $nicErr;
    } else {
        global $nic;
        $nic = $nicNo;
        return '';
    }
}







function validateMobile($umobile) {

    if(empty($umobile)) {
        global $mobileErr;
        $mobileErr = "Username is required";
        return $mobileErr;
    } else if (!preg_match("/^\d{10}$/", $umobile)){ // checks if username contains only letters and digits
        global $mobileErr;
        $mobileErr = "you have entered Invalid Mobile Number";
        return $mobileErr;
    } else {
        global $mobile;
        $mobile = $umobile;
        return '';
    }
}

function validateConfirmMobile($ucphone) {

    if(empty($ucphone)) {
        global $cphoneErr;
        $cphoneErr = "Username is required";
        return $cphoneErr;
    } else if (!preg_match("/^\d{10}$/", $ucphone)){ // checks if username contains only letters and digits
        global $cphoneErr;
        $cphoneErr = "you have entered Invalid Mobile Number";
        return $cphoneErr;
    } else {
        global $cphone;
        $cphone = $ucphone;
        return '';
    }
}

function validatePassword($pword){

    if(empty($pword)) {
        global $passwordErr;
        $passwordErr = "Password is required";
        return $passwordErr;
    } else if (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $pword) === 0) {
        global $passwordErr;
        $passwordErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
        return $passwordErr;
    } else {
        global $password;
        $password = $pword;
        return '';
    }
}

function validateConfirmPassword($cpword){

    if(empty($cpword)) {
        global $cpasswordErr;
        $cpasswordErr = "Password is required";
        return $cpasswordErr;
    } else if (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $cpword) === 0) {
        global $cpasswordErr;
        $cpasswordErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
        return $cpasswordErr;
    } else {
        global $cpassword;
        $cpassword = $cpword;
        return '';
    }
}

function validateEmail($umail){

    if(empty($umail)){
        return '';
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $umail)) { // check if name only contains letters and whitespace,performs a regular expression match
        global $emailErr;
        $emailErr = "you have entered Invalid Email";
        return $emailErr;
    } else {
        global $email;
        $email = $umail;
        return '';
    }
}

function validateConfirmEmail($cumail){

    if(empty($cumail)){
        return '';
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $cumail)) { // check if name only contains letters and whitespace,performs a regular expression match
        global $cemailErr;
        $cemailErr = "you have entered Invalid Email";
        return $cemailErr;
    } else {
        global $cemail;
        $cemail = $cumail;
        return '';
    }
}







//renderform();



?>



<!DOCTYPE HTML>
<html>
<head>
    <title>Excel Cinema</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->


    <!-- BOOTSTRAP STYLES
    <link href="css/bootstrap.css" rel="stylesheet" />-->
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <link href="../Mainsiite/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../Mainsiite/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Mainsiite/css/magnific-popup.css">

    <link href="css/buyTicketLogging.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="../Mainsiite/js/jquery.min.js"></script>
    <script src="../Mainsiite/js/owl.carousel.js"></script>




</head>


<body>


<?php include '../Mainsiite/container/header.php'; ?>
<?php include '../Mainsiite/container/menubar.php'; ?>

<div class="row">
    <div class="regi-form">
        <div class="row">
            <img src="image/buyTicketLogging/images/mem2.jpg" style=" border-radius:40%; margin-left: 180px;" alt=""/>
            <h1 style="margin-left: 140px ;font-size: large;color: #cd0000"><b>Please Enter Correct Details</b></h1>

        </div>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <li>
                            <label id="label">Title :<span>*</span></label>
                            <select id="title" name="title" required>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Rev.">Rev.</option>
                                    </select>

                        </li>

                        <li>
                            <label id="fname">First Name :<span>*</span></label>
                             <input type="text" name="fname" id="fname" required><span style="color: red"><?php echo $fnameErr; ?></span>
                        </li>
                        <li>
                            <label id="lname" >Last Name<span>*</span></label>
                            <input type="text" name="lname" id="lname" required><span style="color: red"><?php echo $lnameErr; ?></span>
                        </li>
                        <li>
                            <label id="gender">Gender :<span>*</span></label>
                            <select id="gender" name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                        </li>

                        <li>
                            <label id="nic">NIC No: <span>*</span></label>
                            <input type="text" name="nic" id="nic" required><span style="color: red"><?php echo $nicErr; ?></span>
                        </li>
                        <li>
                            <label id="address">Address: <span>*</span></label>
                            <input type="text" name="address" id="address" required>
                        </li>
                        <li>
                            <label id="city" for="jform_city" >City : <span>*</span></label>
                            <input type="text" name="city" id="city" required>
                        </li>
                        <li><label id="district">District :<span>*</span></label>
                            <select id="district" name="district" required>
                                        <option value="Ampara">Ampara</option>
                                        <option value="Anuradhapura">Anuradhapura</option>
                                        <option value="Badulla">Badulla</option>
                                        <option value="Batticaloa">Batticaloa</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Galle">Galle</option>
                                        <option value="Gampaha">Gampaha</option>
                                        <option value="Hambantota">Hambantota</option>
                                        <option value="Jaffna">Jaffna</option>
                                        <option value="Kalutara">Kalutara</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Kegalle">Kegalle</option>
                                        <option value="Kilinochchi">Kilinochchi</option>
                                        <option value="Kurunegala">Kurunegala</option>
                                        <option value="Mannar">Mannar</option>
                                        <option value="Matale">Matale</option>
                                        <option value="Matara">Matara</option>
                                        <option value="Moneragala">Moneragala</option>
                                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                                        <option value="Puttalam">Puttalam</option>
                                        <option value="Polonnaruwa">Polonnaruwa</option>
                                        <option value="Ratnapura">Ratnapura</option>
                                        <option value="Trincomalee">Trincomalee</option>
                                        <option value="Vavuniya">Vavuniya</option>
                                    </select>

                        </li>
                        <li>
                            <label id="mobile" >Mobile : </label>*
                            <input type="text" name="mobile"><span style="color: red"><?php echo $mobileErr; ?></span>
                        </li>
                        <li>
                            <label id="smsAlert">Subscribe for SMS Alerts</label>
                            <fieldset id="smsAlert" class="radio">
                                        <input type="radio" id="smsAlert" name="smsAlert" value="1"><label>Yes</label>
                                        <input type="radio" id="smsAlert" name="smsAlert" value="0"><label>No</label></fieldset>
                            <span class="small_text">
                (Enter your mobile number if you wish to receive ticket confirmation /
                updates via SMS – valid for limited operators)</span>


                        </li>
                        <li>
                            <label id="cphone" >Phone Number: <span>*</span></label>
                            <input type="text" name="cphone" id="cphone" required><span style="color: red"><?php echo $cphoneErr; ?></span>
                        </li>
                        <li>
                            <label id="username" for="jform_username" >Username:<span>*</span></label>
                            <input type="text" name="username" id="username" required><br>
                                    <span class="small_text">(Minimum 6 characters)</span>
                        </li>
                        <li>
                            <label id="password" >Password:<span>*</span></label>
                            <input type="password" name="password" id="password" required><span style="color: red"><?php echo $passwordErr; ?>
                                <br><span class="small_text">(Should be a minimum of 8 characters)</span>                        </li>
                        <li>
                            <label id="cpassword">Confirm Password:<span>*</span></label>
                            <input type="password" name="cpassword" id="cpassword" required><span style="color: red"><?php echo $cpasswordErr; ?>
                        </li>
                        <li>
                            <label id="email">Email Address:<span>*</span></label>
                            <input type="text" name="email"  id="emai"  size="30" required><span style="color: red"><?php echo $emailErr; ?>
                        </li>
                        <li>
                            <label id="cemail" >Confirm email:<span>*</span></label>
                            <input type="text" name="cemail"  id="cemai"  size="30" required><span style="color: red"><?php echo $cemailErr; ?>
                        </li>



                        <li>

                           <!-- <td><div id="register-button"><button value="Submit" type="Submit">Submit</button></div></td>-
                            <td><button onclick="validateForm()"> Submit </button></td>-->
                            <input type = "submit" value="Submit" style="margin-right: 200px" name="submit">
                        </li>


                </form>

        <?php
        ob_start();
        include("connect.php");
        if( ($fname != '') && ($lname != '')  &&($nic !='')   &&($mobile != '')  && ($cphone != '')  && ($password != '')
        && ($cpassword != '') &&($email != '') &&($cemail != '')){

            include('insertNewUSer.php');





        }

        ob_end_flush();
        ?>



            </div>


            </div>
<br><br>

<?php include '../MainSiite/container/footer.php'; ?>
</body>
</html>