<?php 
include('config.php');

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

// echo $name, $email, $pass;
if(!empty($name) AND !empty($email) ANd !empty($pass)){

    $result = mysqli_query($connection, "INSERT INTO `register` (`id`, `name`, `email`, `pass`) VALUES ('$id', '$name', '$email', '$pass') ON DUPLICATE KEY UPDATE `name` = '$name', `email` = '$email', `pass` = '$pass'");
if($result){
    echo "registration successful";
}
}else{
    echo "please filled the required fields";
}


?>