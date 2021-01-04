
<?php 
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
                           <h4 class="box-title">Patient List</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <!-- <th class="avatar">Avatar</th> -->
                                       <!-- <th></th> -->
                                       <th>Pateint Name</th>
                                       <th>Requested Blood type</th>
                                       <th>Requested Quantity</th>
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
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>