<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>Blood Bank</title>
        <!--bootstrap files-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!--bootstrap files-->
     <!-- fonts -->
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
     <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Permanent+Marker" rel="stylesheet">
     <!-- fonts -->
     <link rel="stylesheet" type="text/css" href="css/style.css">
     
<style>
body{
     background-color: #fff;
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-position: center;
    }
    ul li {list-style:none;}
    ul li a{color:black; font-weight:bold;}
    ul li a:hover{text-decoration:none;}
    .nav-tabs .nav-link:hover {border:none !important;}
    a{color: #ff3333 !important; font-family: 'Okara', sans-serif;}


</style>
  </head>
  
    
    <body>
    

<div id="result" style="position:fixed;top:300; right:500;z-index: 3000;width:350px;background:white;"></div>
    <div id="resulthotel" style=" margin:0px auto; position:fixed; top:150px;right:750px; background:white;  z-index: 3000;"></div>

        <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-5" id="navBar">
          
            <a class="navbar-brand" href="index.php">Blood Bank</a>
               
                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                
                  <ul class="navbar-nav ml-auto  mx-5">
                      <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php/#aboutus">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php/#services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php/#contact">Contact</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="blood-details.php">View Blood Bank</a>
                </li>
                <li class="nav-item">
                  <form method="post">
                  <!-- <?php
                    if(empty($ptn_id))
                    {
                    ?> -->
                    <button class="btn btn-danger my-5 my-sm-0" name="login" type="submit">Log In</button>
                    <!-- <?php
                    }
                    else
                    {
                    ?> -->  
                    <button class="btn btn-success my-5 my-sm-0" name="logout" type="submit">Log Out</button>
                    <!-- <?php
                    }
                    ?> -->
                    </form>
                </li>
                
              </ul>
              
            </div>
            
        </nav>
<!--menu ends-->

  <script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navBar").style.background = "#343a40";
  } else {
    document.getElementById("navBar").style.background = "#343a40";
  }
  prevScrollpos = currentScrollPos;
}
</script>

