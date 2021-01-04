<?php
ob_start();
include("connection.inc.php");

 if($_SERVER["REQUEST_METHOD"] == "POST") {
   $username=mysqli_real_escape_string($con,$_POST['email']);
   $password=mysqli_real_escape_string($con,$_POST['pass']);
   // $name=mysqli_real_escape_string($con,$_POST['name']);
   // $phn=mysqli_real_escape_string($con,$_POST['mobile']);
   // $dob=mysqli_real_escape_string($con,$_POST['dob']);
   // $bld_grp=mysqli_real_escape_string($con,$_POST['blood_group']);
   // $address=mysqli_real_escape_string($con,$_POST['address']);
   // $gender=mysqli_real_escape_string($con,$_POST['gender']);
   // $description=mysqli_real_escape_string($con,$_POST['description']);

   $sql="SELECT * FROM pateint WHERE ptn_email='$username' and ptn_pswr='$password'";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
   $count=mysqli_num_rows($res);
   if ($count==1) {
      $_SESSION['login_user']=$username;
      // $_SESSION['name']=$_POST['ptn_name'];
      // $_SESSION['id']=$_POST['ptn_id'];
      header('location:patient.php');
      echo "login successfully";
      die();
   }else{
      $ermsg="Please enter correct login details";
   }

}
?>


<?php
include('header.php');
?>
<br><br><br>
<div class="middle" style=" margin:50px auto;width:500px;">
       <ul class="nav nav-tabs navbar_inverse" id="myTab" style="border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" style="padding: 8px 100px;" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="signup-tab" style="text-align: center; border-radius: 5px; padding: 8px 46px;" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Create New Account</a>
          </li>
       </ul>
	   <br><br>

     <?php
            $msg = '';
            
            if (isset($_POST['email']) && !empty($_POST['pass'])) 
                {
        
               if ($_POST['email'] == 'email' && 
                  $_POST['password'] == 'pass') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'email';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
            
	   <div class="tab-content" id="myTabContent">
	   <!--login Section-- starts-->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
			    
			  <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" name="email" id="email" required/>
                    </div>
                   <div class="form-group">
                      <label for="pwd">Password:</label>
                     <input type="password" name="pass" class="form-control" id="pwd" required/>
                   </div>
 
                  <button type="submit" class="btn btn-outline-dark">Login In</button>
                  <div style="color:red;"><?php if(isset($ermsg)) { echo $ermsg; }?></div>
			 </form>
			</div>
			<!--login Section-- ends-->
			
			<!--new account Section-- starts-->
            <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="profile-tab">
    			    <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name"  class="form-control" placeholder="Enter Name" name="name" required="required"/>
                    </div>
					
					       <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email address" required/>
                    </div>
					
                   <div class="form-group">
                      <label for="pwd">Password</label>
                     <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password" required/>
                   </div>
				   
				          <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="tel" id="mobile" class="form-control" name="mobile" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Enter Contact number" required>
                    </div>

                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" id="address" class="form-control" name="address" placeholder="Enter Address" required>
                    </div>

                    <div class="form-group">
                      <label for="dob">Date of birth</label>
                     <input type="date" name="dob" class="form-control" required/>
                   </div>
                   <div class="form-group">
                      <label for="bld-grp">Blood Group</label>
                     	<select type="blood" name="blood_group" class="form-control" required>
                     	<option>Blood type</option>
                     	<option>O+</option>
          						<option>O-</option> 
          						<option>AB+</option>
          						<option>AB-</option>
          						<option>A+</option>
          						<option>A-</option>
          						<option>B+</option>                    	
          						<option>B-</option>
                     </select>
                   </div>
                   <div class="form-group">
                      <label for="bld-grp">Gender</label>
                     	<select type="gender" name="gender" class="form-control" required>
                     	<option>Select gender</option>
                     	<option>Male</option>
                     	<option>Female</option>
                     	<option>Other</option>
                     </select>
                    </div>
                   <div class="form-group">
                     <label for="description">Description(if any)</label>
                     <textarea type="text" rows="2" cols="3" name="description" class="form-control" placeholder="Medical history (if any)"></textarea>
                   </div>
 
                  <button type="submit" name="register" style="background:#ED2553; border:1px solid #ED2553;" class="btn btn-primary">Create New Account</button>
                  <div style="color:red;"><?php if(isset($ermsg)) { echo $ermsg; }?></div>
      			 </form>
      			</div>
            <?php
                $sqli=""
            ?>
                  
            </div>
      	  </div>


<?php
include("footer.php");
?>
	   
</body>
