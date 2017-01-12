<?php
require_once('../../assets/includedFiles/auth.php');
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>




<!--<link rel="stylesheet" href="researchDetails.css" type="text/css" />-->


</head>


<body>
<?php include("../../assets/includedFiles/template.php")?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f"><b>Research Details</b></h1>
                <h1 class="page-subhead-line">All Research details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert Research Paper to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">Add New Research Paper</h4>
                        <div style="margin-top: 20px;">




<div id="body">

	<form action="researchFileUpload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>


    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="../../view/researchDetails/researchUploadedFileView.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>

</body>
</html>