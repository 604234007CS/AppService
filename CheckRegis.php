<?php
 include('config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

 $pid = $_POST['pid'];
 $tid = $_POST['tid'];
 echo 'pid';

 $sql = "SELECT * FROM register WHERE P_ID = '$pid' AND T_ID = '$tid'  ";
 $result = mysqli_query($con, $sql);

    $numrow = mysqli_num_rows($result);
    
    if($numrow != null){
        $arr = array();
        while($row = mysqli_fetch_assoc($result)){
            $arr[] = $row;
        }

        echo json_encode($arr);
        mysqli_close($con);
    }else{
        echo json_encode(null);
    }
?> 