
<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('config.php');

    // $contentdata = file_get_contents("php://input");
    // $getdata = json_decode($contentdata);

    // $user = $getdata->user;
    // $pass = $getdata->pass;

    $tid = $_POST['tid'];
    $pid = $_POST['pid'];

    $sql = "SELECT * FROM register WHERE T_ID = '$tid' AND P_ID = '$pid' ";
            // "SELECT * FROM register WHERE  "
    $result = mysqli_query($con, $sql);

    $numrow = mysqli_num_rows($result);

    if($numrow == 1){
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