<?php
require_once("../db/db.php");
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_exts = explode('.',$_FILES['image']['name']);
      $file_ext= strtolower(end($file_exts));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 5097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/".$file_name);
      }
   }
   $task = mysqli_real_escape_string($con,$_REQUEST['task']);
   $description = mysqli_real_escape_string($con,$_REQUEST['description']);
   $type = mysqli_real_escape_string($con,$_REQUEST['type']);
   $status = mysqli_real_escape_string($con,$_REQUEST['status']);
   $id = uniqid();
   $sql1 = "INSERT INTO `tasks`(`name`, `description`, `type`, `statusTask`, `statusId`,`location`) VALUES ('$task','$description','$type','$status','$id','images/$file_name')";
   mysqli_query($con,$sql1);
   echo "<script>location.href='../?task=$type';</script>;"
?>