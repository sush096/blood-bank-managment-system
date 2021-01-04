<?php
  include('connection.inc.php');


?>


<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank | Home</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include('header.php'); ?>

<!-- header start -->
<!-- <div class="container-fluid"> -->
<div class="container-fluid py-5 w-100" id="hero">
        <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-7">
          </div>
          <div class="col-lg-3 col-md-6 col-sm-4 my-auto mx-auto d-flex justify-content-center">
          </div>
          <div class="col-lg-5 col-md-1 col-sm-1 d-flex text-right">
            <div style="color: #000; font-weight: 900; margin-top: 95%; margin-left: 40%;">
            <h1>Donate blood</h1>
	    	    <button class="btn btn-danger">Donate</button>
          </div>
          </div>
        </div>
      </div>
  </div>
	
<!-- header ends -->

<!-- about us start -->
<div class="container-fluid" id="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<img src="img/blood-type.png" class="w-100">
			</div>
			<div class="col-sm-12 col-md-7 text-center ml-5">
				<h1 style="color: #000; font-weight: 600;">About Us</h1>
				<h5 style="line-height:2.5rem; ">Our aim to provide prompt, economical and reliable services of the safest blood and other blood products like RBCs, platelets, etc. Offering the industry-leading, advanced technology and well-equipped inventory, we make all types of blood available for the patients and many hospitals. We contribute in saving many lives in the time of need or in an emergency.</h5>
			</div>
			
		</div>
	</div>
</div>
<!-- about us end -->




<!-- services container start -->
<div class="container text-center mt-5 py-5">
    <h1 class="mb-5">Services</h1>
    <div class="row mx-auto my-auto">
        <div id="services" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
              <!-- <?php
              // $hospid='';
              //     $sql="SELECT * FROM hospital WHERE hosp_id='$hospid'";
              //     $req=mysqli_query($con,$sql);
              //     // $row=mysqli_num_rows($req);
              //     while ($row=mysqli_fetch_assoc($req)){
                            
              //     $i=0;
              //     $result = $con->query("SELECT * from hospital WHERE hosp_id = '$hosp_id'");
              //     foreach($result as $row){
              //       $actives = '';
              //       if ($i == 0) {
              //         $actives = 'active';
              //       }
                    
              ?> -->
                <!-- <div class="carousel-item <?php $actives; ?>">
                    <div class="col-md-4">
                        <div class="card card-box card-body">
                            <img src="img/hospital/<?php echo $row['hosp_id']."/" .$row['hosp_img'];?>" height="250px" width="150px">
                            <div class="container"><?php echo $row['hosp_name'];?></div>
                            <div class="container"><button class="btn btn-success">Request for blood</button></div>
                             
                        </div>
                    </div>
                </div> -->

               <!--  <?php
            //     $i++;
            //   }
            // }
              ?> -->
              
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-box card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=2">
                            <div class="container"><button class="btn btn-success mt-3">Request for blood</button></div>
                        </div>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-box card-body" data-card="2">
			                    <img class="img-fluid" src="http://placehold.it/380?text=3">
                          <div class="container"><button class="btn btn-success mt-3">Request for blood</button></div>
        			          </div> 
                        <!-- <div class="container"><button class="btn btn-danger">Request for blood</button></div> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-box card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=4">
                            <div class="container"><button class="btn btn-success mt-3">Request for blood</button></div>
                        </div>
                    </div>
                   
                </div>

            </div>
			<a class="carousel-control-prev" href="#services" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#services" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
        </div>
    </div>

    
</div>


<!-- services container end -->

<!-- contact container start -->
<div class="container-fluid" id="contactus">
	<div class="container my-5 py-5">
		<div class="row">
			<!-- <div class="col-sm-12"> -->
				
				<div class="col-md-6">
					<h1 style="color: #000; font-weight: 600; margin-bottom: 25px;">Contact Us</h1>
					<form id="contact" method="post">
			            <div class="form-group">
			                 <input type="text" class="form-control"  placeholder="Name*" name="name" required/>
			            </div>
						<div class="form-group">
			                 <input type="email" class="form-control"  placeholder="email*" value="<?php //if(isset($cust_id)) echo $cust_id; ?>" name="email" required/>
			            </div>
						<div class="form-group">
			                 <input type="tel" class="form-control" pattern="[6-9]{1}[0-9]{9}"  name="phone" placeholder="Phone*" required/>
			            </div>
						<div class="form-group">
			                <textarea class="form-control" placeholder="Message*" name="msgtxt" rows="3" col="10" required/></textarea/>
			            </div>
						<div class="form-group">
			                   <button type="submit" name="message" class="btn btn-danger">Send Message</button>
			            </div>
			        </form>
				</div>
				<!-- <div class="col-md-1"></div> -->
				<div class="col-md-6">
					<img src="img/drops-of-blood-heartbeat.png" class="w-100 py-5">
				</div>
			<!-- </div> -->
		</div>
	</div>
</div>

<!-- .contact us end -->


<?php include('footer.php'); ?>	
</body>

<script type="text/javascript">

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

</script>
</html>
