<?php
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("127.0.0.1","root","Acute3062!","scaduler");   
    $data_stream = "'".$_GET['Id']."','".$_GET['Password']."','".$_GET['Name']."'";
    $query = "insert into user(`user_id`, `user_password`, `user_name`) values (".$data_stream.")";
    $result = mysqli_query($conn, $query);
     
    if($result)
      echo("1");
    else
      echo("-1");
     
    mysqli_close($conn);
?>