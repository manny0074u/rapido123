<?php
// Include MySQL class
require_once('inc/mysql.class.php');
// Include database connection
require_once('inc/global.inc.php');
// Start the session


// Process actions
$action = $_GET['action'];
switch ($action) {
    case 'add':
            
 if($_POST['firstname']=="" && ($_POST['lastname']=="" && ($_POST['phone']=="" && ($_POST['email']=="" && ($_POST['address']=="" && ($_POST['state']=="" && ($_POST['lga']==""))))))){
                echo "<script>alert('fields are empty');  window.location='add_account.php'</script>";
            }

            else if($_POST['firstname']=="" || ($_POST['lastname']=="" || ($_POST['phone']=="" || ($_POST['email']=="" || ($_POST['address']=="" || ($_POST['state']=="" || ($_POST['lga']=="" ))))))){
                 echo "<script>alert('some fields are empty');  window.location='add_account.php'</script>";
            }
            // ensure the email address is of valid syntax        
            else if (! @eregi('^[0-9a-z]+'.'@'.'([0-9a-z-]+\.)+'.'([0-9a-z]){2,4}$', strtolower(trim($_POST['email'])))){
                $msg .= "<font color=\"red\">* You entered an invalid email address!</font> <br>";
            
            }
            else{
            
                //Check if the account exists
                $sqlcheck = "SELECT id,email FROM merchant WHERE email='".strtolower(trim($_POST['email']))."'";
                $logininfo = $db->query($sqlcheck);
                $rw = $logininfo->fetch();
                
                if($rw['email']==strtolower(trim($_POST['email']))){
                    $msg .= "This Email account already exist !, please <a href=\"../login-2.php\">Login</a>";
                    
                }                                               
                else{
                
                    $reg_date = date('l jS \of F Y ');
                    $m_code = uniqid();

                    
                                            
 $sql = "INSERT INTO merchant VALUES('','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['address']."','','".$_POST['state']."','".$_POST['lga']."','".$m_code."','".$reg_date."','0')";
                      $db->query($sql);
                    
                                        
                   // echo "<script>alert('Registration   successful');  <script>";
                        
                        echo "<script>alert('Registration Successful !');  window.location='login.php'</script>";
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

Include_once('inc/header2.php');

?>

		<!-- start Main Wrapper -->
		<div class="main-wrapper">

			<!-- start hero-header -->
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="index-2.html">Home</a></li>
						<li><span>Register</span></li>
					</ol>
					
				</div>
				
			</div>
			<!-- end hero-header -->

			<div class="login-container-wrapper">	
	
				<div class="container">
				
					<div class="row">
					
						<div class="col-md-10 col-md-offset-1">
						
							<div class="row">

								<div class="col-sm-6 col-sm-offset-3">
								
									<div class="login-box-wrapper">
							
										<div class="modal-header">
											<h4 class="modal-title text-center">Create your account for free</h4>
										</div>

										<div class="modal-body">
																
											<div class="row gap-20">
											
												<div class="col-md-12">
													<button class="btn btn-facebook btn-block mb-5">Register with Facebook</button>
												</div>
												<div class="col-md-12">
													<button class="btn btn-google-plus btn-block">Register with Google+</button>
												</div>
												
												<div class="col-md-12">
													<div class="login-modal-or">
														<div><span>or</span></div>
													</div>
												</div>
												<form  method="post" action="register.php?action=add">
												<div class="col-sm-12 col-md-12">

													<div class="form-group"> 
														<label>first Name</label>
														<input class="form-control" name="firstname" type="text"> 
													</div>
												
												</div>


												<div class="col-sm-12 col-md-12">

													<div class="form-group"> 
														<label>Last Name</label>
														<input class="form-control" name="lastname" type="text"> 
													</div>
												
												</div>


												<div class="col-sm-12 col-md-12">

													<div class="form-group"> 
														<label>Phone</label>
														<input class="form-control" name="phone" type="text"> 
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-12">

													<div class="form-group"> 
														<label>Email Address</label>
														<input class="form-control" name="email" type="text"> 
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group"> 
														<label>Gender</label>
														<select class="selectpicker show-tick form-control mb-15" name="gender" data-live-search="false">
															<option>Select Gender</option>
															<option value="male">Male</option>
															<option value="Female">Female</option>
														</select> 
													</div>
												
												</div>


												<div class="col-sm-12 col-md-12">

													<div class="form-group"> 
														<label>Address</label>
														<input class="form-control" name="address" type="text"> 
													</div>
												
												</div>



												<div class="col-sm-12 col-md-12">

													<div class="form-group"> 
														<label>state</label>
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


												<div class="col-sm-12 col-md-12">

													<div class="form-group"> 
														<label>LGA</label>
														<input class="form-control" name="lga" type="text"> 
													</div>
												
												</div>





												<div class="col-sm-12 col-md-12">
												
													<div class="form-group"> 
														<label>Password</label>
														<input class="form-control" name="password" type="password"> 
													</div>
												
												</div>
												
											
												
												<div class="col-sm-12 col-md-12">
													<div class="checkbox-block"> 
														<input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
														<label class="" for="register_accept_checkbox">By register, I read &amp; accept <a href="#">the terms</a></label>
													</div>
												</div>
												
												<div class="col-sm-12 col-md-12">
													<div class="login-box-box-action">
														Already have account? <a href="account-login-page.html">Log-in</a>
													</div>
												</div>
												
											</div>

										</div>

										<div class="modal-footer text-center">
											<button type="submit" name="submit" class="btn btn-primary">Register</button>
										</div>
										
									</div>
									</form>

									
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
			
		<?php

Include_once('inc/footer.php');

?>