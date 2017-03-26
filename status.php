
			<?php

// Include MySQL class
require_once('inc/mysql.class.php');
// Include database connection
require_once('inc/global.inc.php');


session_start();

$sql = "SELECT * FROM request_atm WHERE c_code='".$_GET['uc']."'";
$logininfo = $db->query($sql);
$rw = $logininfo->fetch();



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
						<li><span>Page not found</span></li>
					</ol>
					
				</div>
				
			</div>
			<!-- end hero-header -->

			<div class="error-page-wrapper">
		
				<div class="container">

					<div class="row">
					
						<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
						
							
							
							<h1>Request Submit Successfully !</h1>
							
							<h5>Your request has been recieved, We will get in touch with you as soon as possible. your ATM tracking code : <span style="color:red"><?php echo $rw['c_code'] ?></span></h5>
							
							
							
							
						</div>
					
					</div>
				
				</div>
			
			</div>
			
			
			<?php

include_once('inc/footer.php');

?>