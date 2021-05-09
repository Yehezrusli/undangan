<?php
$con = new mysqli("mysql", "root", "kambing", "Undangan");
if ($con->connect_errno) {
    echo "failed to connect";
}
?>