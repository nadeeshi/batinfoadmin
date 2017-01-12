<?php
require_once ('../../assets/includedFiles/connect.php');


if(isset($_POST) && count($_POST)){
  $action = $_POST['action'];


  if ($action == "postToForum"){
    $message  = htmlspecialchars($_POST["message"]);
    $parentId = htmlspecialchars($_POST["parentId"]);
    $topicId  = htmlspecialchars($_POST["topicId"]);


    // $query= "INSERT INTO post (post_content, post_date, post_topic) VALUES ('$message', '$date', '$id' )";

    $query= "INSERT INTO post (post_content,post_topic,parent_post) VALUES ('$message','$topicId','$parentId')";
    $result= mysqli_query($bd, $query);

    if($result){
      echo json_encode(array("status" => "success"));
    }
    else{
      echo json_encode(array("status" => "error", "error" => mysqli_error($bd)));
    }
  }

  if ($action == "getReply"){
    $topicId  = htmlspecialchars($_POST["topicId"]);

    $query= "SELECT * FROM `post` WHERE `post_topic` = '$topicId' ORDER BY `post_date`";
    $result= mysqli_query($bd, $query);

    if($result){
      echo json_encode(array("status" => "success","result" => mysqli_fetch_all($result,MYSQLI_ASSOC)));
    }
    else{
      echo json_encode(array("status" => "error", "error" => mysqli_error($bd)));
    }
  }
}
