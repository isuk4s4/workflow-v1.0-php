<?php 
require_once("./db/db.php");
$id = mysqli_real_escape_string($con,$_REQUEST['id']);
$sql = "SELECT * FROM `tasks` WHERE `id`='$id'";
$result = mysqli_query($con,$sql);
$data  = mysqli_fetch_assoc($result);

?>
<div>
    <div class="img" style="display: flex;justify-content: center;"><img src="<?php echo $data['location'];?>"style="width: 300px;height: 300px;" alt=""></div>
    <div class="left">
        <div class="info">
            <div class="line">
                <div class="title">Name:</div>
                <div class="data"><?php echo $data['name']; ?></div>   </div> 
                <div class="line">
                <div class="title">Description:</div>
                <div class="data"><?php echo $data['description']; ?></div></div>
           <div class="line">
                <div class="title">Type:</div>
                <div class="data"><?php echo $data['type']; ?></div>
            </div> <div class="line" >
                <div class="title">Status:</div>
                <div class="data"><?php echo $data['statusTask']; ?></div>
            </div>
        </div>
    </div>
</div>