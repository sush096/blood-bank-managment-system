<?php

include("../connection.inc.php");
// include("../function.inc.php");

if(isset($_POST['submit'])){
   $username=mysqli_escape_string($con,$_POST['username']);
   $password=mysqli_escape_string($con,$_POST['password']);
   echo $sql="SELECT * from hospital WHERE hosp_email='$username' and hosp_pswrd='$password'";
   $res=mysqli_query($con,$sql);
   $count=mysqli_num_rows($res);
   if($count>0){
      echo $count;
         $_SESSION['LOGIN']='yes';
         $_SESSION['EMAIL']='yes';
         header('location:dashboard.php');
   }else{
      $msg="Please enter correct login details";
      // echo 'hello';
      echo $count;
   }
}


?>
<!doctype html>

<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body class="bg-dark">
      <?php
        // include('header.php');
         ?>
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                 

            <div class="middle mr-150" style=" margin:50px auto; width:450px;">
             <ul class="nav nav-tabs navbar_inverse" id="myTab" style="border-radius:10px 10px 10px 10px;" role="tablist">
                <li class="nav-item">
                   <a class="nav-link active" style="padding: 10px;" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="signup-tab" style="text-align: center; border-radius: 5px; padding: 10px;" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Create New Account</a>
                </li>
             </ul>
            <br><br>
            <div class="tab-content" id="myTabContent">
            <!--login Section-- starts-->
                  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
                   
                  <form method="POST">
                     <div class="form-group">
                        <label>Email Id</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required />
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required />
                     </div>
                     <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                     
                  </form>
                  <div class="text-danger mt-2"><?php echo $msg ?></div>
               </div>
               <!--login Section-- ends-->
               
               <!--new account Section-- starts-->
               <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="profile-tab">
              <?php
                       // if(isset($_POST['add'])) {
                         
                       //    if(!get_magic_quotes_gpc() ) {
                       //       $hosp_name = addslashes ($_POST['hosp_name']);
                       //       $hosp_email = addslashes ($_POST['hosp_email']);
                       //    } else {
                       //       $hosp_name = $_POST['hosp_name'];
                       //       $hosp_email = $_POST['hosp_email'];
                       //    }

                       //   $sqli="INSERT INTO hospital (hosp_id, hosp_email, hosp_pswrd, hosp_name, hosp_phn, hosp_address) VALUES (NULL, 'email', 'password', 'name', 'mobile', 'address')";
                       //       // mysql_select_db('TUTORIALS');
                       //    $retval = mysqli_query($con,$sql);
                       
                       //    if(!$retval ) {
                       //       die('Could not enter data: ' . mysqli_error());
                       //    }
                       
                       //    echo "Entered data successfully\n";
                       //    mysqli_close($con);
                       // } else {
                  ?>
                      
                        <form method="POST" enctype="multipart/form-data" action="<?php $_PHP_SELF ?>">
                          <div class="form-group">
                            <label for="name">Hospital Name</label>
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
                            <label for="mobile">Contact Number</label>
                            <input type="tel" id="mobile" class="form-control" name="mobile" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Enter Contact number" required>
                          </div>

                          <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" name="address" placeholder="Enter Address" required>
                          </div>
                        
                          <div class="form-group mt-3">
                            <label for="upload" class="w-25 mr-5">Upload Logo</label>
                            <input type="file" name="logo" required>
                            <!-- <button class="btn btn-primary w-25">Upload</button> -->
                          </div>
                          <button type="submit" name="add" class="btn btn-primary">Create New Account</button>
                       
                        </form>
                        <?php
                              //}
                        ?>
                      <div class="feild-error"><?php //echo $errmsg; ?></div>
                    </div>
                   </div>
                      
                </div>
               </div>

               
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>