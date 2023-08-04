<div class="form"  autocomplete="off" method="POST">
    <form action="php/addTask.php" method="post" enctype="multipart/form-data">
        <div class="forminputs" style="width: 40%;">
            <div class="inputs" style="margin-bottom: 13px;" autocomplete="off">
            <div class="groupInput">
                <div class="input" style="display: flex;justify-content: space-between;">
                    <input type="text" autocomplete="off" placeholder="Task name" class="inputF" name="task" style="padding: 10px 10px;width: 49%;background: #e9e9ed;border: none;">
                    <select id="status" name="status" autocomplete="off">
<option value="To Do">To Do</option>
<option value="Done">In Progress</option></select><select id="type" name="type">
<option value="Web">web</option>
<option value="Android">android</option>
<option value="IOS">ios</option></select>
                </div>
                
                </div>
            </div>
            <div class="textBox" autocomplete="off" row="10"><textarea  autocomplete="off" name="description" id="" cols="30" rows="10" style="width: 100%; " placeholder="Description"></textarea></div>
            </div>
            <div style="display: flex;">
            <div class="upload-btn-wrapper">
  <button class="btn">Image</button>
  <input type="file" name="image" />
</div>  <button style="border: none;
color: black;
background-color: #e9e9ed;
padding: 8px 20px;
font-family: roboto;
margin-top: 10px;margin-left:10px;">Upload</button>
</div>
        </form></div>