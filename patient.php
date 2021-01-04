<?php
include("connection.inc.php");
   $user_check = $_SESSION["login_user"];
   $ses_sql = mysqli_query($con,"SELECT * FROM pateint WHERE ptn_email='$username' and ptn_pswr='$password'"); 
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
  
   if(!isset($_SESSION["login_user"])){
      header("location:login.php");
      die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Patient Dashboard | Blood Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<?php
include('header.php');

?>
<!--navbar ends-->


<br><br>
<div class="middle" style="  padding:60px; border:1px solid #ED2553;  width:100%;">
       <!--tab heading-->
	   <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#fff;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" style="border-bottom:2px solid #ED2553; " id="view-tab" data-toggle="tab" href="#view" role="tab" aria-controls="view" aria-selected="true">View Request</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="manageaccount-tab" data-toggle="tab" href="#manageaccount" role="tab" aria-controls="manageaccount" aria-selected="false">Account Settings</a>
          </li>
		  
       </ul>
	   <br><br>
	<!--tab 1 starts-->   
	   <div class="tab-content" id="myTabContent">
	   
            <div class="tab-pane fade show active" id="view" role="tabpanel" aria-labelledby="home-tab">
                 <table class="table">
                  <tbody>
	               
                      <tr>
                         <td><?php //echo $res['hosp_name'] ?></td>
                         <td><?php //echo $res['blood_grp'];?></td>
                         <td><?php //echo $res['blood_status'];?></td>
                         <td><?php //echo $res['blood_qty'];?></td>
                         <td><?php //echo $nm; ?></td>
		                <form method="post" enctype="multipart/form-data">
                           <td><button type="submit" name="del"  value="<?php echo $res['request_id']?>" class="btn btn-danger">Delete</button></td>
                        </form>
                        
                      </tr>
					  
					  
                 </tbody>
	      </table>	
		</div>	 
	  
<!--tab 1 ends-->	   
			
			
			<!--tab 2 starts-->
            <div class="tab-pane fade" id="manageaccount" role="tabpanel" aria-labelledby="manageaccount-tab">
              <!-- <?php 
              // while($row) {
              //     $name = $row($_POST['name']);
              //     $mobilenumber = $row($_POST['mobile']);
              //     $address = $row($_POST['address']);
              // }

           
              ?>-->
			    <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" value="<?php if (isset($name)) { echo $name;}?>" class="form-control" name="name" required="required"/>
                    </div>
					
					<div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" value="<?php if (isset($username)) { echo $username;}?>" class="form-control"  readonly/>
                    </div>
					<div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="tel" id="mobile" class="form-control" name="mobile" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" value="<?php if (isset($mobile)) { echo $mobile;}?>" placeholder="" required>
                    </div>

                    <div class="form-group">
                      <label for="address">address</label>
                      <input type="tel" id="address" class="form-control" name="address" value="<?php if (isset($address)) { echo $address;}?>" placeholder="" required>
                    </div>
					
                   <div class="form-group">
                      <label for="pwd">Password:</label>
                     <input type="password" name="pswd" value="<?php if (isset($password)) { echo $password;}?>"class="form-control"  id="pwd" required/>
                   </div>
				   <div class="form-group">
                      <label for="dob">Date of birth</label>
                     <input type="date" name="dob" class="form-control" value="<?php if (isset($dob)) { echo $dob;}?>" readonly />
                   </div>
                   <div class="form-group">
                      <label for="bld-grp">Blood Group</label>
                     	<input type="text" name="blood_grp" class="form-control" value="<?php if (isset($blood_grp)) { echo $blood_grp;}?>" readonly />
                   </div>
                   <div class="form-group">
                      <label for="gender">Gender</label>
                     	<input type="text" name="gender" class="form-control" value="<?php if (isset($gender)) { echo $gender;}?>" readonly />
                    </div>
                   <div class="form-group">
                      <label for="description">Description(if any)</label>
                     <textarea type="text" rows="2" cols="3" name="description" class="form-control" placeholder="<?php if (isset($description)) { echo $description;}?>"></textarea>
                   </div>
				   
 
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <div class="footer" style="color:red;"><?php if(isset($ermsg)) { echo $ermsg; }?><?php if(isset($ermsg2)) { echo $ermsg2; }?></div>
			 </form>
       
			</div>
<?php    
    
      if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
            $name = strtoupper($_POST['name']);
            $pswd = strtoupper($_POST['pass']);
            $email = strtoupper($_POST['email']);
            $mobilenumber = strtoupper($_POST['mobile']);
            $address = strtoupper($_POST['address']);
            $user_id = $_SESSION['login_id'];

            $statement = "UPDATE UserDetail set ptn_name = $name, ptn_pswr=$pswd, ptn_email = $email, ptn_phn = $mobilenumber, ptn_adrss = $address where  ptn_id = $id;";
            $res=mysqli_query($con, $statement);
            header("Location:pateint.php");
            die();
          }
          ?>
			<!--tab 2 ends-->
			
	  </div>
	</div>  
	  
<?php
include("footer.php");
?>


   
</body>
</html>