<link rel="stylesheet" type="text/css" href="css/style.css">

<?php include('header.php'); ?>
	<div class="container-fluid my-5 py-5">
<h4 class="ml-5 pl-5"><b>Search For Blood Type</b></h4>
		<div class="container search-container d-flex pt-4">

		    <a href="#" class="ml-2 w-50"><form method="post"><input type="text" name="search_hospital" id="search_hospital" placeholder="Search by hospital name" class="form-control search-bar" /></form></a>
		    <a href="#" class="ml-2 w-50"><form method="post"><input type="text" name="search_text" id="search_text" placeholder="Search by blood type " class="form-control search-bar" /></form></a>
	    </div>
	    <!-- <br><br><br> -->
	    <div class="container my-5 clear-both">

	    	<table class="table ">
	            <thead>
	                <tr>
	                   <th class="serial">#</th>
	                   <th>Hospital Name</th>
	                   <th>Blood type</th>
	                   <th>Quantity</th>
	                   <th>Request for sample</th>
	                </tr>
	             </thead>
	             <tbody>
	                <tr>
	                   <td class="serial">1.</td>
	                   <td> <span class="name">Louis Stanley</span> </td>
	                   <td> <span class="product">A+</span> </td>
	                   <td><span class="count">2</span></td>
	                   <td><button class="btn btn-primary">Request</button>
	                   		<button class="btn btn-success">Request send</button>
	                   </td>
	                </tr>
	            </tbody>
	        </table>
	    </div>
	</div>

<?php include('footer.php'); ?>