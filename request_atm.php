<?php
// Include MySQL class
require_once('inc/mysql.class.php');
// Include database connection
require_once('inc/global.inc.php');


session_start();



// Process actions
$action = $_GET['action'];
switch ($action) {
    case 'add':
            
 if($_POST['acc_name']=="" && ($_POST['acc_num']=="" )){
                echo "<script>alert('fields are empty');  window.location='request_atm.php'</script>";
            }

            else if($_POST['acc_name']=="" || ($_POST['acc_num']=="" )){
                 echo "<script>alert('some fields are empty');  window.location='request_atm.php'</script>";
            }
           
                
                 


                else{
                
                    $reg_date = date('l jS \of F Y ');
                    $c_code = uniqid();

                    
                                            
 $sql = "INSERT INTO request_atm VALUES('','".$_POST['acc_name']."','".$_POST['acc_num']."','".$_POST['phone']."','".$_POST['acc_type']."','0','".$c_code."','".$reg_date."')";
                      $db->query($sql);
                    
     
                        
                      	header("Location: status.php?uc=".$c_code."&msg=".$msg);
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

include_once('inc/header2.php');

?>
		<!-- start Main Wrapper -->
		<div class="main-wrapper">

			<!-- start hero-header -->
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="index-2.html">Home</a></li>
						<li><span>Login</span></li>
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
											<h4 class="modal-title text-center">Enter your account details below</h4>
										</div>
										
										<div class="modal-body">
											<div class="row gap-20">
											
												
												
												<div class="col-sm-12 col-md-12">
												 <form  method="post" action="request_atm.php?action=add">
										
													<div class="form-group"> 
														<label>Account Name </label>
														<input class="form-control" name="acc_name" placeholder="Enter your Account Name" type="text"> 
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group"> 
														<label>Acoount Number</label>
														<input class="form-control" name="acc_num" placeholder="Enter your Account Number" type="text"> 
													</div>
												
												</div>
									



												<div class="col-sm-12 col-md-12">
												
													<div class="form-group"> 
														<label>Phone Number</label>
														<input class="form-control" name="phone" placeholder="Enter your phone" type="text"> 
													</div>
												
												</div>												
												
												
												
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group"> 
														<label>Account Type</label>
														<select class="form-control" ame="acc_type">
														<option>Select Account Type</option>
															<option value="MasterCard">MasterCard</option>
															<option value="Visa Debit Card">Visa Debit Card</option>
															<option value="Verve Card">Verve Card</option>
															
														</select> 
													</div>
												
												</div>
												
												
											</div>
										</div>
										
										<div class="modal-footer text-center">
											<button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
										</div>
										</form>
										
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