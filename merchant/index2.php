<?php

include_once('inc/header2.php');

?>
			<!-- end Navbar (Header) -->

			<!-- start Sign-in Modal -->
			<div id="loginModal" class="modal fade login-box-wrapper" tabindex="-1" data-width="550" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Sign-in into your account</h4>
				</div>
				
				<div class="modal-body">
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<button class="btn btn-facebook btn-block mb-5-xs">Log-in with Facebook</button>
						</div>
						<div class="col-sm-6 col-md-6">
							<button class="btn btn-google-plus btn-block">Log-in with Google+</button>
						</div>
						
						<div class="col-md-12">
							<div class="login-modal-or">
								<div><span>or</span></div>
							</div>
						</div>
						
						<div class="col-sm-12 col-md-12">
				
							<div class="form-group"> 
								<label>Username</label>
								<input class="form-control" placeholder="Min 4 and Max 10 characters" type="text"> 
							</div>
						
						</div>
						
						<div class="col-sm-12 col-md-12">
						
							<div class="form-group"> 
								<label>Password</label>
								<input class="form-control" placeholder="Min 4 and Max 10 characters" type="text"> 
							</div>
						
						</div>
						
						<div class="col-sm-6 col-md-6">
							<div class="checkbox-block"> 
								<input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
								<label class="" for="remember_me_checkbox">Remember me</label>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-6">
							<div class="login-box-link-action">
								<a data-toggle="modal" href="#forgotPasswordModal">Forgot password?</a> 
							</div>
						</div>
						
						<div class="col-sm-12 col-md-12">
							<div class="login-box-box-action">
								No account? <a data-toggle="modal" href="#registerModal">Register</a>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" class="btn btn-primary">Log-in</button>
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>
			<!-- end Sign-in Modal -->
			
			<!-- start Register Modal -->
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account for free</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<button class="btn btn-facebook btn-block mb-5-xs">Register with Facebook</button>
						</div>
						<div class="col-sm-6 col-md-6">
							<button class="btn btn-google-plus btn-block">Register with Google+</button>
						</div>
						
						<div class="col-md-12">
							<div class="login-modal-or">
								<div><span>or</span></div>
							</div>
						</div>
						
						<div class="col-sm-12 col-md-12">
				
							<div class="form-group"> 
								<label>Username</label>
								<input class="form-control" placeholder="Min 4 and Max 10 characters" type="text"> 
							</div>
						
						</div>
						
						<div class="col-sm-12 col-md-12">
				
							<div class="form-group"> 
								<label>Email Address</label>
								<input class="form-control" placeholder="Enter your email address" type="text"> 
							</div>
						
						</div>
						
						<div class="col-sm-12 col-md-12">
						
							<div class="form-group"> 
								<label>Password</label>
								<input class="form-control" placeholder="Min 8 and Max 20 characters" type="text"> 
							</div>
						
						</div>
						
						<div class="col-sm-12 col-md-12">
						
							<div class="form-group"> 
								<label>Password Confirmation</label>
								<input class="form-control" placeholder="Re-type password again" type="text"> 
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
								Already have account? <a data-toggle="modal" href="#loginModal">Log-in</a>
							</div>
						</div>
						
					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" class="btn btn-primary">Register</button>
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>
			<!-- end Register Modal -->

			<!-- start Forget Password Modal -->
			<div id="forgotPasswordModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Restore your forgotten password</h4>
				</div>
				
				<div class="modal-body">
					<div class="row gap-20">
						
						<div class="col-sm-12 col-md-12">
							<p class="mb-20">Maids table how learn drift but purse stand yet set. Music me house could among oh as their. Piqued our sister shy nature almost his wicket. Hand dear so we hour to.</p>
						</div>
						
						<div class="col-sm-12 col-md-12">
				
							<div class="form-group"> 
								<label>Email Address</label>
								<input class="form-control" placeholder="Enter your email address" type="text"> 
							</div>
						
						</div>

						<div class="col-sm-12 col-md-12">
							<div class="checkbox-block"> 
								<input id="forgot_password_checkbox" name="forgot_password_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
								<label class="" for="forgot_password_checkbox">Generate new password</label>
							</div>
						</div>
						
						<div class="col-sm-12 col-md-12">
							<div class="login-box-box-action">
								Return to <a data-toggle="modal" href="#loginModal">Log-in</a>
							</div>
						</div>
						
					</div>
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" class="btn btn-primary">Restore</button>
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>
			<!-- end Forget Password Modal -->
			
		</header>

		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- start breadcrumb -->
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="#">All Employers</a></li>
						<li><span>Resume Lists</span></li>
					</ol>
					
				</div>
				
			</div>
			<!-- end breadcrumb -->
			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
									<div class="admin-user-item">
										
										<div class="image">
											<img src="images/man/01.jpg" alt="image" class="img-circle" />
										</div>
										
										<h4>Christine Gateau</h4>
										<p class="user-role">Professional</p>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a href="#" class="btn btn-primary btn-sm">Post Job</a>
										<a href="#" class="btn btn-primary btn-sm btn-inverse">Create Resume</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li>
											<a href="#"><i class="fa fa-tachometer"></i> Dashboard</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-user"></i> Profile</a>
										</li>
										<li class="active">
											<a href="#"><i class="fa fa-key"></i> Change Password</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-bell"></i> My Alert</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-bookmark"></i> Saved Jobs</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-pencil"></i> Resume Lists</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-sign-out"></i> Logout</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Hello <?php echo $rw['firstname'] ?> <?php echo $rw['lastname'] ?>!</h2>
										<p>Your last loged-in: <span class="text-primary"> <?php echo date('l jS \of F Y h:i:s A');  ?></span></p>
										
									</div>
									
									<div class="resume-list-wrapper">
									
										<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<a href="#">

															<div class="image">
																<img src="images/man/01.jpg" alt="images" class="img-circle" />
															</div>
															
															<h4>Suttira Ketkaew</h4>
															
															<div class="row">
																<div class="col-sm-12 col-md-7">
																	<strong class="mr-10">Senior Software Engineering</strong> <i class="fa fa-map-marker text-primary mr-5"></i> Marbomorn Company Ltd,.
																</div>
																<div class="col-sm-12 col-md-5 mt-10-sm">
																	<i class="fa fa-calendar  text-primary mr-5"></i> Jan 2013 to Mar 2014
																</div>
															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">
													
														<a class="btn btn-primary btn-sm mb-5 mb-0-sm">Edit</a>
														<a class="btn btn-primary btn-sm btn-inverse">Delete</a>

													</div>
													
												</div>
												
											</div>
										
										</div>
										
										<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<a href="#">

															<div class="image">
																<img src="images/man/01.jpg" alt="images" class="img-circle" />
															</div>
															
															<h4>Suttira Ketkaew</h4>
															
															<div class="row">
																<div class="col-sm-12 col-md-7">
																	<strong class="mr-10">Senior Software Engineering</strong> <i class="fa fa-map-marker text-primary mr-5"></i> Marbomorn Company Ltd,.
																</div>
																<div class="col-sm-12 col-md-5 mt-10-sm">
																	<i class="fa fa-calendar  text-primary mr-5"></i> Jan 2013 to Mar 2014
																</div>
															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">
													
														<a class="btn btn-primary btn-sm mb-5 mb-0-sm">Edit</a>
														<a class="btn btn-primary btn-sm btn-inverse">Delete</a>

													</div>
													
												</div>
												
											</div>
										
										</div>
										
										<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<a href="#">

															<div class="image">
																<img src="images/man/01.jpg" alt="images" class="img-circle" />
															</div>
															
															<h4>Suttira Ketkaew</h4>
															
															<div class="row">
																<div class="col-sm-12 col-md-7">
																	<strong class="mr-10">Senior Software Engineering</strong> <i class="fa fa-map-marker text-primary mr-5"></i> Marbomorn Company Ltd,.
																</div>
																<div class="col-sm-12 col-md-5 mt-10-sm">
																	<i class="fa fa-calendar  text-primary mr-5"></i> Jan 2013 to Mar 2014
																</div>
															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">
													
														<a class="btn btn-primary btn-sm mb-5 mb-0-sm">Edit</a>
														<a class="btn btn-primary btn-sm btn-inverse">Delete</a>

													</div>
													
												</div>
												
											</div>
										
										</div>
										
									</div>
									
									<div class="mt-30">
									
										<a href="#" class="btn btn-primary btn-lg">Add new resume</a>
										
									</div>
									
								</div>

							</div>
							
						</div>

					</div>

				</div>
			
			</div>

			<?php

include_once('inc/footer.php');

?>