<?php 

include('config.php');

$userid = $_POST['userid'];

$update = mysqli_query($connection, "SELECT * from `register` where `id` = '$userid'");
if(mysqli_num_rows($update) > 0){
    $data = mysqli_fetch_assoc($update);
    echo json_encode($data);
}

?>