<?php 
include('config.php');


$userid = $_POST['userid'];

$delete = "DELETE from `register` where `id` = '$userid'";

$result = mysqli_query($connection, $delete);
if($result){
    echo "data successfully deleted";
}else{
    echo "failed query";
}


?>