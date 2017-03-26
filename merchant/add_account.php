<?php
// Include MySQL class
require_once('inc/mysql.class.php');
// Include database connection
require_once('inc/global.inc.php');
// Start the session
session_start();

$sql = "SELECT * FROM merchant WHERE m_code='".$_SESSION['merchant']."'";
$logininfo = $db->query($sql);
$rw = $logininfo->fetch();



// Process actions
$action = $_GET['action'];
switch ($action) {
    case 'add':
            
 if($_POST['firstname']=="" && ($_POST['lastname']=="" && ($_POST['phone']=="" && ($_POST['email']=="" && ($_POST['address']=="" && ($_POST['state']=="" && ($_POST['lga']=="" && ($_POST['acc_name']=="" && ($_POST['acc_number']=="" && ($_POST['acc_type']=="")))))))))){
                echo "<script>alert('fields are empty');  window.location='add_account.php'</script>";
            }

            else if($_POST['firstname']=="" || ($_POST['lastname']=="" || ($_POST['phone']=="" || ($_POST['email']=="" || ($_POST['address']=="" || ($_POST['state']=="" || ($_POST['lga']=="" || ($_POST['acc_name']==""  || ($_POST['acc_type']==""))))))))){
                 echo "<script>alert('some fields are empty');  window.location='add_account.php'</script>";
            }
            // ensure the email address is of valid syntax        
            else if (! @eregi('^[0-9a-z]+'.'@'.'([0-9a-z-]+\.)+'.'([0-9a-z]){2,4}$', strtolower(trim($_POST['email'])))){
                $msg .= "<font color=\"red\">* You entered an invalid email address!</font> <br>";
            
            }
            else{
            
                //Check if the account exists
                $sqlcheck = "SELECT id,email FROM user WHERE email='".strtolower(trim($_POST['email']))."'";
                $logininfo = $db->query($sqlcheck);
                $rw = $logininfo->fetch();
                
                if($rw['email']==strtolower(trim($_POST['email']))){
                    $msg .= "This Email account already exist !, please <a href=\"../login-2.php\">Login</a>";
                    
                }                                               
                else{
                
                    $reg_date = date('l jS \of F Y ');
                    $user_code = uniqid();

                    
                                            
 $sql = "INSERT INTO user VALUES('','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['address']."','".$_POST['state']."','".$_POST['lga']."','".$_POST['acc_name']."','','".$_POST['acc_type']."','','".$user_code."','".$_POST['m_code']."','".$reg_date."','0')";
                      $db->query($sql);
                    
                                        
                    //echo "<script>alert('Registration   successful');  <script>";
                        
                        echo "<script>alert('Successful !');  window.location='index.php'</script>";
                }
                 
            }
                    
        break;
    case 'edit':
        
        break;
    case 'delete':
        	
        break;
    case 'update':
        
    break;
}

?>  






<?php
include_once('inc/header3.php');

?>
		
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Add New Account</h2>
										<p>This form is for a new user.</p>
										
									</div>



									<?php


									
									echo '<form class="post-form-wrapper" method="post" action="add_account.php?action=add">
								
											<div class="row gap-20">
										
												
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>First Name</label>
														<input type="text" name="firstname" class="form-control" value="">
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" name="lastname" class="form-control" value="">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Phone</label>
														<input type="text" name="phone" class="form-control" value="">
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" class="form-control" value="">
													</div>
													
												</div>

												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Address</label>
														<input type="text" name="address" class="form-control" value="">
													</div>
													
												</div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>State</label>
													<select class="selectpicker show-tick form-control mb-15" name="state" data-live-search="false">
															<option>Select</option>
															<option value="abia">Abia</option>
															<option value="adamawa">Adamawa</option>
															<option value="akwa_ibom">Akwa Ibom</option>
															<option value="anambra">Anambra </option>
															<option value="bauchi">Bauchi</option>
															<option value="benue">Benue</option>
															<option value="cross_river">Cross River</option>
															<option value="delta">Delta</option>
															<option value="edo">Edo</option>
															<option value="enugu">Enugu</option>
															<option value="lagos">Lagos</option>
															<option value="abuja">Abuja</option>
														</select>
													
												</div>
														
												</div>
												
												<div class="clear"></div>
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>L.G.A.</label>
														<input type="text" name="lga" class="form-control" value="">
													</div>
													
												</div>

												<input type="text" name="m_code"  hidden value="'.$rw['m_code'].'">
												
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Account Name</label>
														<input type=" text" name="acc_name" class="form-control" value=" ">
													</div>
													
												</div>
												
												<div class="clear"></div>
												
												
												
												<div class="col-sm-6 col-md-4">
												
													<div class="form-group">
														<label>Account type</label>
														<select class="selectpicker show-tick form-control mb-15" name="acc_type" data-live-search="false">
															<option>Select</option>
															<option value="savings">Savings</option>
															<option value="current">Current</option>
														</select>
													</div>
													
												</div>

												

												<div class="col-sm-12 mt-10">
													<button type="submit" name="submit" class="btn btn-primary">Submit</button>
													
												</div>

											</div>
											
										</form>';

										?>
									
								</div>

							</div>
							
						</div>

					</div>

				</div>
			
			</div>

			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								<div class="row">
								
									<div class="col-sm-6 col-md-4">
									
										<div class="footer-about-us">
											<h5 class="footer-title">about HaNgan</h5>
											<p>Sudden looked elinor off gay estate nor silent. Son read such next see the rest two. Was use extent old entire sussex...</p>
											<a href="#">read more</a>
										</div>

									</div>
									
									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">quick links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="#">Local Jobs</a></li>
											<li><a href="#">Company Directory</a></li>
											<li><a href="#">Browse Jobs</a></li>
											<li><a href="#">Salary Estimator</a></li>
											<li><a href="#">Success Stories</a></li>
											<li><a href="#">Help</a></li>
											<li><a href="#">Post a Job</a></li>
											<li><a href="#">Employer Login</a></li>
											<li><a href="#">Publisher</a></li>
											<li><a href="#">Include My Jobs</a></li>
										</ul>
									
									</div>

								</div>

							</div>
							
							<div class="col-sm-12 col-md-3 mt-30-sm">
							
								<h5 class="footer-title">newsletter</h5>
								
								<p>Subsribe to get our latest updates and oeffers</p>
								
								<div class="footer-newsletter">
									
									<div class="form-group">
										<input class="form-control" placeholder="enter your email " />
										<button class="btn btn-primary">subsribe</button>
									</div>
									
									<p class="font-italic font13">*** Don't worry, we wont spam you!</p>
								
								</div>

							</div>

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-4 col-md-4">
					
								<p class="copy-right">&#169; Copyright 2016 HaNgan</p>
								
							</div>
							
							<div class="col-sm-4 col-md-4">
							
								<ul class="bottom-footer-menu">
									<li><a href="#">Cookies</a></li>
									<li><a href="#">Policies</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Blogs</a></li>
								</ul>
							
							</div>
							
							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="#"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
									<li><a href="#"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
									<li><a href="#"><i class="ri ri-google-plus" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
									<li><a href="#"><i class="ri ri-youtube-play" data-toggle="tooltip" data-placement="top" title="youtube"></i></a></li>
								</ul>
							</div>
						
						</div>

					</div>
					
				</div>
			
			</footer>
			
		</div>
		<!-- end Main Wrapper -->

	</div> <!-- / .wrapper -->
	<!-- end Container Wrapper -->
 
 
<!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>
<!-- end Back To Top -->


<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>

<script type="text/javascript" src="js/fileinput.min.js"></script>
<script type="text/javascript" src="js/customs-fileinput.js"></script>


</body>



<!-- Mirrored from crenoveative.com/envato/hangan/employee-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 06:53:36 GMT -->
</html>