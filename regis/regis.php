<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('../config.php');

    // $getT_ID  =  '1'; 
    // $getP_ID  =  '2';
    // $getDir_Name   = 'นาย';
    // $getP_Name      = 'นัสรี';
    // $getTell      =  '0986751234';
    


 
    $sql = "INSERT INTO register( T_ID, P_ID, Dir_Name, P_Name, Tell  )
                        VALUES ( '$getT_ID', '$getP_ID','$getDir_Name', '$getP_Name', '$getTell')";
    $result = mysqli_query($con, $sql);
    
    if($result){
        $callback = array(
            'status' => 200
            ,'msg' => 'ลงทะเบียนสำเร็จ'
        );
        
    }else{
        $callback = array(
            'status' => 404
            ,'msg' => 'ลงทะเบียนไม่สำเร็จ'
        );
    }

    echo json_encode($callback);
?>