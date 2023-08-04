
    <br><br>

    <?php 
 $query = "SELECT * FROM `tasks` WHERE `type`='Web' and (`statusTask`='To Do' or `statusTask`='In Progress')";
 $run = mysqli_query($con,$query);

 $queryDone = "SELECT * FROM `tasks` WHERE `type`='Web' and `statusTask`='Done'";
 $runDone = mysqli_query($con,$queryDone);

 if(mysqli_num_rows($run) > 0){?><table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">task</th>
        <th scope="col">status</th>
        <th scope="col">delete</th>
        <th scope="col">view</th>
      </tr>
    </thead>
    <tbody>
   <?php 
   while($data = mysqli_fetch_assoc($run)){?>
   <tr>
 <td><?php echo $data['name'];?></td>
 <td>

<?php if($data['statusTask']=='In Progress'){?>
<select id="status" name="status"  onchange="sendAjax(<?php echo $data['id'];?>
,this.value)"autocomplete="off">
   <option value="In Progress">In Progress</option>
   <option value="Done">Done</option>
   <option value="To Do">To Do</option>
 </select>

<?php }elseif($data['statusTask'] == 'To Do'){?><select id="status" name="status" onchange="sendAjax(<?php echo $data['id'];?>
,this.value)"autocomplete="off">
   <option value="To Do">To Do</option>
   <option value="Done">Done</option>
   <option value="In Progress">In Progress</option></select><?php }?>
</td> <td><button style="padding: 0.6rem 1.5rem;
border: none;
background: #e9e9ed;" onclick="sendAjaxDelete(<?php echo $data['id'];?>)">Delete</button></td>
<td><a href="?task=view&id=<?php echo $data['id'];?>"><button style="padding: 0.6rem 1.5rem;
border: none;
background: #e9e9ed;">View</button></a></td>
</tr>
   
   <?php }

   ?>

    
    </tbody>
  </table>

<br><br><br>



<?php if(mysqli_num_rows($runDone)>0){?>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">sss</th>
        <th scope="col">status</th>
        <th scope="col">delete</th><th scope="col">view</th>
      </tr>
    </thead>
    <tbody>
   
    <?php 
   while($dataDone = mysqli_fetch_assoc($runDone)){?>
 <td><?php echo $dataDone['name'];?></td>
 <td><select id="status" name="status"  onchange="sendAjax(<?php echo $dataDone['id'];?>
,this.value)" autocomplete="off">
   <option value="Done">Done</option>
   <option value="In Progress">In Progress</option>
   <option value="To Do">To Do</option>
 </select>
</td>
<td><button style="padding: 0.6rem 1.5rem;
border: none;
background: #e9e9ed;" onclick="sendAjaxDelete(<?php echo $dataDone['id'];?>)">Delete</button></td><td><a href="?task=view&id=<?php echo $data['id'];?>"><button style="padding: 0.6rem 1.5rem;
border: none;
background: #e9e9ed;">View</button></a></td>
</tr>
   
   <?php }

   ?>

    </tbody>
  </table><?php }?>










  <?php }elseif(mysqli_num_rows($runDone)>0){?>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">task</th>
        <th scope="col">status</th>
        <th scope="col">delete</th>        <th scope="col">view</th>

      </tr>
    </thead>
    <tbody>
   
    <?php 
   while($dataDone = mysqli_fetch_assoc($runDone)){?>
 <td><?php echo $dataDone['name'];?></td>
 <td><select id="status" name="status"  onchange="sendAjax(<?php echo $dataDone['id'];?>
,this.value)">
   <option value="Done">Done</option>
   <option value="In Progress">In Progress</option>
   <option value="To Do">To Do</option>
 </select>
</td>
<td><button style="padding: 0.6rem 1.5rem;
border: none;
background: #e9e9ed;" onclick="sendAjaxDelete(<?php echo $dataDone['id'];?>)">Delete</button></td><td>
  <a href="?task=view&id=<?php echo $dataDone['id'];?>"><button style="padding: 0.6rem 1.5rem;
border: none;
background: #e9e9ed;">Delete</button></a></td>
</tr>
   
   <?php }

   ?>

    </tbody>
  </table>
<?php 
  }else{
  ?>
  <div id="myModal" class="modal" style="display: block;">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <p>No Tasks Found</p>

</div>

</div>
  
  <?php
 }
 ?>

<script>
  function sendAjax(id,st){

$.ajax({
 type: "POST",
 url: './php/updateStatus.php',
 data: {id:id,status:st},

});
}  function sendAjaxDelete(id){

$.ajax({
 type: "POST",
 url: './php/deleteTask.php',
 data: {id:id},

});
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
