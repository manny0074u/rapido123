<?php

// Include MySQL class
require_once('inc/mysql.class.php');
// Include database connection
require_once('inc/global.inc.php');


session_start();

$sql = "SELECT * FROM merchant WHERE m_code='".$_SESSION['merchant']."'";
$logininfo = $db->query($sql);
$rw = $logininfo->fetch();



?>



<?php

include_once('inc/header3.php');

?>
		
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Hello <?php echo $rw['firstname'] ?> <?php echo $rw['lastname'] ?>!</h2>
										<p>Your last loged-in: <span class="text-primary"> <?php echo date('l jS \of F Y h:i:s A');  ?></span></p>
										
									</div>
									
									<div class="resume-list-wrapper">


									<?php
															$sql = "SELECT * FROM user ";
														$result = $db->query($sql);
														while ($row = $result->fetch()) {
														                                   
															
															echo '
										<div class="resume-list-item">
										
											<div class="row">
											
												<div class="col-sm-12 col-md-10">
												
													<div class="content">
													
														<a href="#">

															<div class="image">
																
															</div>
															<h4>'.$row['firstname'].' '.$row['lastname'].'</h4>
															
															<div class="row">
																<div class="col-sm-12 col-md-7">
																	<strong class="mr-10">'.$row['acc_type'].' Account</strong> <i class="fa fa-map-marker text-primary mr-5"></i> '.$row['state'].' State
																</div>
																<div class="col-sm-12 col-md-5 mt-10-sm">
																	<i class="fa fa-calendar  text-primary mr-5"></i> '.$row['reg_date'].'
																</div>
															</div>

														</a>
													
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-2">
													
													<div class="resume-list-btn">';

													if ($row['status'] == 1){
														echo '
														<a class="btn btn-success btn-sm mb-5 mb-0-sm">Verified</a>';
													}

													if ($row['status'] == 0){
														echo '
														<a class="btn btn-danger btn-sm mb-5 mb-0-sm">Not Verified</a>';
													}

													echo '</div>
													
												</div>
												
											</div>
										
										</div>';

										}
										
										?>
										
									</div>
									
									<div class="mt-30">
									
										<a href="add_account.php" class="btn btn-primary btn-lg">Add new Account</a>
										
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