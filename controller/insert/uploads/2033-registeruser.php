<!DOCTYPE HTML>
<html>
<head>
    <title>Excel Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- BOOTSTRAP STYLES
    <link href="css/bootstrap.css" rel="stylesheet" />-->
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>

<body style="background-color:lightpink">
<div class="container">

        <div class="row ">
            <h1><b>XLCinema - Buy Ticket</b></h1>
            <div class="col-md-10">
                <div class="panel-body">


                    <br>
                    <h5><b>Create New Account</b></h5>
                    <br />



<form  action="insertNewUser.php" method="post">

<table>
<tbody><tr>
    <td><div class="form_label"><label id="label">Title :<span>*</span></label></div></td>
    <td><div class="form_input"><select id="title" name="title" class="required">
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Dr.">Dr.</option>
                <option value="Prof.">Prof.</option>
                <option value="Rev.">Rev.</option>
            </select>
        </div></td>
</tr>

<tr>
    <td><div class="form_label"><label id="fname">First Name :<span>*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="fname" id="fname" ></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="lname" >Last Name<span>*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="lname" id="lname" ></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="gender">Gender :<span>*</span></label></div></td>
    <td><div class="form_input"><select id="gender" name="gender" class="required">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div></td>
</tr>

<tr>
    <td><div class="form_label"><label id="nic">NIC No: <span>*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="nic" id="nic" ></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="address">Address: <span>*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="address" id="address" ></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="city" for="jform_city" >City : <span>*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="city" id="city" ></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="district">District :<span>*</span></label></div></td>
    <td><div class="form_input"><select id="district" name="district" class="required">
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
        </div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="mobile" >Mobile : </label></div></td>
    <td><div class="form_input"><input type="text" name="mobie"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="smsAlert">Subscribe for SMS Alerts</label></div></td>
    <td><div class="form_input"><fieldset id="smsAlert" class="radio">
                <input type="radio" id="smsAlert" name="smsAlert" value="1"><label>Yes</label>
                <input type="radio" id="smsAlert" name="smsAlert" value="0"><label>No</label></fieldset>
            <span class="small_text">
                (Enter your mobile number if you wish to receive ticket confirmation /
                updates via SMS – valid for limited operators)</span>
        </div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="cphone" >Phone Number: <span>*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="cphone" id="cphone" ></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="username" for="jform_username" >Username:<span>*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="username" id="username" ><br>
            <span class="small_text">(Minimum 6 characters)</span></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="password" >Password:<span>*</span></label></div></td>
    <td><div class="form_input"><input type="password" name="password1" id="password" ></div>
        <span class="small_text">(Should be a minimum of 4 characters)</span></td>
</tr>
<tr>
    <td><div class="form_label"><label id="cpassword">Confirm Password:<span>*</span></label></div></td>
    <td><div class="form_input"><input type="password" name="cpassword" id="cpassword" ></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="email">Email Address:<span></span></label></div></td>
    <td><div class="form_input"><input type="text" name="email"  id="email" value="" size="30"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="cemail" >Confirm email:<span>*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="cemail"  id="cemail" value="" size="30"></div></td>
</tr>



<tr>
    <td></td>
    <td><div id="register-button"><button id="account-register" type="submit">Submit</button></div></td>
            </tr>
</tbody></table>

</form>
<br>

</div>
                </div>
            </div>
    </div>

</body>
</html>