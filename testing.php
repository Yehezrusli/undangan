<?php
    include("connection.php");
    // $pass = hash("sha256", "admin123321");
    // $insert_penatua = "INSERT INTO user (username, password) VALUES ('admin', '$pass')";
    // if($con->query($insert_penatua)){
    //     echo "sukses";
    // }else{
    //     echo "gagal";
    // }

    $remove_tamu = "DELETE FROM Tamu";
    if($con->query($remove_tamu)){
        echo "sukses";
    }else{
        echo "gagal";
    }
?> 

