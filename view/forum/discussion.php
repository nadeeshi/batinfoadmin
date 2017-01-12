<?php
require_once ("../../assets/includedFiles/connect.php");
?>


<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
    <link href="../../assets/css/forum.css" rel="stylesheet" type="text/css">
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />

    <script src="../../assets/js/moment.js"></script>

</head>



<body>
<?php include "../../assets/includedFiles/template.php" ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="row" style="padding-left: 2%; padding-right: 1.5%;">
                    <?php
                        $sql="SELECT topic_id, topic_subject, topic_content,topic_date FROM topics
                        WHERE topics.topic_id = " . mysqli_real_escape_string($bd, isset($_GET['id']) ? $_GET['id'] : null);
                        $result= mysqli_query($bd, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $id=mysqli_real_escape_string($bd, isset($_GET['id']) ? $_GET['id'] : null);
                        // echo($id);
                    ?>
                    <div  id = "topicId" style="display:none"> <?php echo $id; ?> </div>

                    <div class="col-xs-12 thread-topic-content" id = "-1">
                        <p class="topic-subject"><?php echo $row['topic_subject']; ?></p>
                        <p class="topic-date"><?php echo $row['topic_date'] ?></p>
                        <div class="row">
                            <div class="col-xs-push-1 col-xs-11">
                                <p><?php echo $row['topic_content']; ?></p>
                            </div>
                        </div>
                        <div>
                            <div class="col-xs-push-11 col-xs-1">
                                <a class="btn btn-default btn-xs" onclick = "ajaxReply(-1)"> Reply </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-left:15px;" id = "replytopLevel"> </div>

                <div class="modal fade"  id = "replyModel" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">Your Reply</h4>
                            </div>
                            <div class="modal-body">
                                <form id = "replayform">
                                    <div class="form-group">
                                        <label class="control-label" for="message">Message:</label>
                                        <div>
                                            <textarea class="massage form-row form-control" rows="6" cols="8" name="message" id = "message"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-default submitModel btn-custom">Post to forum</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
    </div>
</div>





<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>



</body>
</html>
<script src="../../assets/js/forum.discussion.js"></script>
