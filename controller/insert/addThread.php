<?php 
$msg ='';
require_once ('../../assets/includedFiles/connect.php');
if (!empty($_POST)) {
  $topic = $_POST['topic'];
  $message =$_POST['message'];
  $date= date('Y-m-d');

  $query= "INSERT INTO topics (topic_subject, topic_content, topic_date) VALUES ('$topic' ,'$message', '$date' )";
  $result= mysqli_query($bd, $query);

  if ($result){
    $msg ='<a href=../../view/forum/forumTopics.php>View your topics</a>';
  }
  else{
    $msg= "Error" .'<br>'. mysqli_error($bd);
  }

}
?>





<?php
require_once('../../assets/includedFiles/auth.php');
?>



<?php
require_once ("../../assets/includedFiles/connect.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BatFacts.com</title>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />

    <style type="text/css">
        table tr:nth-child(even) {
            background-color: #e1e1d0;
        }
        table tr:nth-child(odd) {
            background-color: white;
        }
    </style>
</head>
<body>
<?php include("../../assets/includedFiles/template.php")?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f"><b>Forum Details</b></h1>
                <h1 class="page-subhead-line">Add Different Topics </h1>

                <form class="form-horizontal" method="post" action="addThread.php">
                    <div class="form-group">
                        <label class="control-label col-xs-2">Subject:</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control form-row" id="subject" name="topic" placeholder="Enter Subject" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Message:</label>
                        <div class="col-xs-8">
                            <textarea class="massage form-row form-control" rows="6" cols="8" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-offset-2 col-xs-8 btn-class">
                            <button type="submit" class="btn btn-default button-custom">Post to forum</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2"></label>
                        <div class="col-xs-8">
                            <?php echo $msg; ?>
                        </div>
                    </div>
                </form>





            </div>
        </div>



    </div>
</div>

<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>
</body>
</html>














 