<?php 
// require("../connection.inc.php");
// require("../function.inc.php");
// if (isset($_SESSION['LOGIN']) && ($_SESSION['EMAIL']) != '') {
   
// }else{
//    header('location:Hosp-login.php');
//    die();
// }

include('header.php');

$sql="SELECT * from request order by req_id desc";
$res=mysqli_query($con,$sql);

?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Requests </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                  <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <!-- <th class="avatar">Avatar</th> -->
                                       <!-- <th></th> -->
                                       <th>Name</th>
                                       <th>Blood type</th>
                                       <th>Quantity</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $i=1;
                                    while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                       <td class="serial"><?php echo $i;?></td>
                                       <!-- <td> #5469 </td> -->
                                       <td> <span class="name"><?php echo $row[''];?></span> </td>
                                       <td> <span class="product"><?php echo $row[''];?></span> </td>
                                       <td><span class="count">2</span></td>
                                       <td>
                                          <span class="badge badge-complete">Complete</span>
                                       </td>
                                    </tr>
                                 <?php }?>
                                   </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
   <div class="clearfix"></div>

         
<div class="tab-pane fade" id="accountsettings" role="tabpanel" aria-labelledby="accountsettings-tab">
<form method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="name">Hospital Name:</label>
      <input type="text" id="name" value="<?php //if(isset($nm)){ echo $nm;}?>" class="form-control" name="fn" />
    </div>
   <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" id="email" value="<?php //if(isset($emm)){ echo $emm;}?>" class="form-control" name="emm" readonly="readonly"/>
    </div>
   <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" id="address" value="<?php //if(isset($ad)){ echo $ad;}?>" class="form-control" name="add" required/>
    </div>
   <div class="form-group">
      <label for="mobile">Contact:</label>
      <input type="text" id="mobile" pattern="[6-9]{1}[0-9]{9}" value="<?php //if(isset($mb)){ echo $mb;}?>" class="form-control" name="mob" required/>
    </div>
   
   <div class="form-group">
      <label for="pwd">Password:</label>
     <input type="password" name="pwsd" class="form-control" value="<?php //if(isset($psd)){ echo $psd;}?>" id="pwd" required/>
   </div>
   
   

  <button type="submit" name="upd_account" style="background:#ED2553; border:1px solid #ED2553;" class="btn btn-primary">Update</button>
  
</form>
</div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>