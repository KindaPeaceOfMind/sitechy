<?php
    // session_start();
    include_once('bd.php');
    $data = json_decode(file_get_contents('php://input'), true);
    $order_id = $data['id'];
    $path = $data['path'];
    mysqli_query($db,"UPDATE images SET path='$path' WHERE order_id=$order_id")
?>