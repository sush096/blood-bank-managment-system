<?php 
include('header.php');

$sql="SELECT * from blood order by blood_id desc";
$res=mysqli_query($con,$sql);

?>


<div class="middle" style=" padding:40px; border:1px solid #ED2553;  width:100%;">
       <!--tab heading-->
	   <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
          
          <li class="nav-item">
              <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#addBlood" role="tab" aria-controls="home" aria-selected="true">Add Blood</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="home-tab" data-toggle="tab" href="#updateBlood" role="tab" aria-controls="profile" aria-selected="false">Manage Blood</a>
          </li>
      </ul>
  </div>
<div class="tab-content" id="myTabContent">
	   
    <div class="tab-pane fade show active" id="addBlood" role="tabpanel" aria-labelledby="home-tab">
<!--add blood-->
		<form action="" method="post" enctype="multipart/form-data">
             <div class="form-group"><!--blood_name-->
             <label for="blood_name">blood Name:</label>
                    <input type="text" class="form-control" id="blood_name" value="<?php if(isset($blood_name)) { echo $blood_name;}?>" placeholder="Enter blood Name" name="blood_name" required>
             </div>
			 
			 
             <div class="form-group"><!--qty-->
                    <label for="qty">Quantity :</label>
                    <input type="number" class="form-control" id="qty"  value="<?php if(isset($qty)) { echo $qty;}?>" placeholder="10000" name="qty" required>
             </div>
			 
			 
            
            <button type="submit" name="add" class="btn btn-primary">ADD</button>
			<br>
			<span style="color:red;"><?php if (isset($msg)){ echo $msg;}?></span>
       </form>
   </div>
</div>

		<div class="tab-pane active" id="updateBlood" role="tabpanel" aria-labelledby="profile-tab">
             <div class="container"> 
			 <table border="1" bordercolor="#F0F0F0" cellpadding="20px">
			 <th>Serial No.</th>
			 <th>Blood name</th>
			 <th>Blood Quantity</th>
			 <th>Blood status </th>
			 <th>Delete Item   </th>
			 <th>Update item Details </th>
			  
			    <tr>
				<td style="width:150px;"></td>
				<td align="center" style="width:150px;"></td>
				<td align="center" style="width:150px;"></td>
				<td align="center" style="width:150px;">
					<a href="#"><button type="button" class="btn btn-warning">Delete </button></a>
				</td>
				<td align="center" style="width:150px;">
				<a href="#"><button type="button" class="btn btn-sucess">Update </button></a>
				</td>
				</tr>
				</table>
			</div>
		</div>
