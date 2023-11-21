<?php 
include('config.php');

$result = mysqli_query($connection, "SELECT * from `register`");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['pass'].'</td>
        <td><button class="btn btn-warning upd" data-id="'.$row['id'].'" > Update </button></td>
        <td><button class="btn btn-danger del" data-id="'.$row['id'].'"> DELETE </button></td>
        </tr>';
    }
}

?>