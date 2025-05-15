<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

// Storing Session
$user = $_SESSION['admin_login_user'];

if(!isset($_SESSION['admin_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from admin where admin_name ='$user'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['admin_id'];
              $para2 = $row4['admin_name'];
			  $para3 = $row4['admin_password'];
			  
?>

<!DOCTYPE html>
<html>
<?php require ('aheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php require ('anav.php');  ?>
 	
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->



<div class="container ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Crops</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-warning mb-3">
				  <div class="card-header">
				  <span class=" text-warning display-4" > Produced Crops  </span>
				  
					
				  </div>
				  
				  <div class="card-body text-white">
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">
				
				    <thead>
		<tr class="font-weight-bold text-default">
						
								
					<th><center>Crop Name</center></th>
					<th><center>Quantity (in KG)</center></th>
												
						</tr>
			</thead>
	
	
				
		<tbody>	  
							  
						<?php 
	$sql = "SELECT crop, quantity FROM production_approx where quantity > 0";

								$query = mysqli_query($conn,$sql);

								while($res = mysqli_fetch_array($query)){	
				 ?>		  
						  
		 <tr class="text-center">
							 <td> <?php echo $res['crop'];  ?> </td>
							 <td> <?php echo $res['quantity'];  ?> </td>
							</tr>

							 <?php 
							 }
							  ?>
							  
		</tbody>
				  </table>			
				  </div>
				</div>
				
					 		  
            </div>
          </div>
        </div>
		 
</section>

<footer class="footer">
        <div class="container">
                    <div class="row">         
                <div class="col-4 col-md-2   align-self-center">				
                    <img class="align-text-center img-fluid"  src="../assets/img/footer-logo.png" />               
                </div>				
                <div class="offset-sm-2 col-5 ">
                    <h5>Our Address</h5>
                    <address>
                    Jaypee University of Information Technology<br>
		              Soln,HP<br>		              
		              <div class="btn-group text-center" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+919622415027"><i class="fa fa-phone"></i> Call</a>
                    <a role="button" class="btn btn-success" href="mailto:211380@juitsolan.in"> <i class="fa fa-envelope-o"></i> Email</a>
                </div>
		           </address>
                </div>				
                <div class="col-12 col-md-3 align-self-center">
            <div class="social-network  text-center">
				           
       <button target="_blank" href="/" rel="nofollow" class="btn btn-icon-only btn-linkedin rounded-circle" data-toggle="tooltip" data-original-title="Mail Us">
            <span class="btn-inner--icon"><i class="fas fa-envelope"></i></span>
          </button>
          <button target="_blank" href="/" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
          </button>
          <button target="_blank" href="/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
          </button>
          <button target="_blank" href="/" rel="nofollow" class="btn btn-icon-only btn-instagram rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fab fa-instagram "></i></span>
          </button>
          <button target="_blank" href="/" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
            <span class="btn-inner--icon"><i class="fab fa-github"></i></span>
          </button>
             
           			
				</div>				
				</div>
           </div>		    
		   <hr>
           <div class="row justify-content-center">             
                     <div class="col-auto">					
                    <p>&copy; Copyright 2024 Fertilisense, All Rights Reserved </p>
                </div>
           </div>
        </div>
    </footer>
	   <script>
				$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>

</html>

