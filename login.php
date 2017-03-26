
<?php
// Include MySQL class
require_once('inc/mysql.class.php');
// Include database connection
require_once('inc/global.inc.php');


session_start();




$msg ="";
$action = $_GET['action'];
switch ($action) {
  case 'add':
    
    break; 
  case 'select':
    
    $email = trim($_POST['email']);
    
    $password = trim($_POST['password']);
    
    if($email=="" && $password==""){
      $msg = "Fields are empty!";
    } 
    else if($email=="" || $password==""){
      $msg = "A Field is empty!";
    }
    else{
                
      $sql = "SELECT * FROM merchant WHERE email='".$email."' and password='".$password."'";
      $logininfo = $db->query($sql);
      $rw = $logininfo->fetch();
      
      //echo $rw['Email'] ." ".$rw['Password'] ." ".$rw['UniqueCode'];      
      if($rw['email']!=$email && $rw['password']!=$password){
        $msg = "Invalid Login,  Check your email and password";
      }

    
 
     


      else{
            
        //header("Location: account.php?uc=".$rw['Usercode']);        
        //$msg = "valid Login!";
         $_SESSION['merchant'] = $rw['m_code'];
        echo "<script language='javascript' type='text/javascript'>
            window.location.href='merchant';
            </script>";
      }
    }
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
											<h4 class="modal-title text-center">Sign-in into your account</h4>
										</div>
										
										<div class="modal-body">
											<div class="row gap-20">
											
												<div class="col-md-12 mb-5">
													<button class="btn btn-facebook btn-block">Log-in with Facebook</button>
												</div>
												<div class="col-md-12">
													<button class="btn btn-google-plus btn-block">Log-in with Google+</button>
												</div>
												
												<div class="col-md-12">
													<div class="login-modal-or">
														<div><span>or</span></div>
													</div>
												</div>
												<form  method="post" action="login.php?action=select">
												
												<div class="col-sm-12 col-md-12">
										
													<div class="form-group"> 
														<label>Email</label>
														<input class="form-control" name="email" type="text"> 
													</div>
												
												</div>
												
												<div class="col-sm-12 col-md-12">
												
													<div class="form-group"> 
														<label>Password</label>
														<input class="form-control" name="password" type="password"> 
													</div>
												
												</div>
												
												
												
												<div class="col-sm-6 col-md-6">
													<div class="login-box-link-action">
														<a href="account-forgot-password-page.html">Forgot password?</a> 
													</div>
												</div>
												
												<div class="col-sm-12 col-md-12">
													<div class="login-box-box-action">
														No account? <a href="account-register-page.html">Register</a>
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="modal-footer text-center">
											<button type="submit" name="submit" class="btn btn-primary">Log-in</button>
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