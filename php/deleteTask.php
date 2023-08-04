<?php 
    require_once('../db/db.php');
    if(isset($_POST['id'])){

    $id = mysqli_real_escape_string($con,$_POST['id']);
    $query = "DELETE FROM `tasks` WHERE `id`='$id'";
    $result = mysqli_query($con,$query);

    
}

?>