<?php
 include('../config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

//  $id = $_POST['id'];
 $sql = "SELECT evaluate.KnowledgeGained,COUNT(evaluate.KnowledgeGained   ) as num FROM evaluate
 GROUP BY evaluate.KnowledgeGained ";
 $result = mysqli_query($con, $sql);
 
 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 