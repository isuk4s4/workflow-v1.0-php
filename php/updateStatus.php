<?php 
    require_once('../db/db.php');
    if(isset($_POST['status'])&& $_POST['id']){

    $status = mysqli_real_escape_string($con,$_POST['status']);
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $query = "UPDATE `tasks` SET `statusTask`='$status' WHERE `id`='$id'";
    $result = mysqli_query($con,$query);

    
}

?>