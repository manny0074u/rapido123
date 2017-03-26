			






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





			</div>

		<?php
		include_once('inc/header.php');
		?>



		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- start hero-header -->
			<div class="hero" style="background-image:url('images/slide.jpg');">
				<div class="container">

					<h1>Create A Merchant  Account </h1>
					<p>easily create acount for new users and earn with it </p>

					

				</div>
				
			</div>
			<!-- end hero-header -->
			
			<div class="post-hero bg-light">
			
				<div class="container">

					<div class="featured-sm-wrapper mt-15">
						
						<div class="row">
						
							<div class="col-sm-4 mb-20-xs">
								
								<div class="featured-sm-item clearfix">
									
									<div class="icon">
										<i class="flaticon-thick-big-winners-cup"></i>
									</div>
									
									<div class="content">
										We are working with Verified Merchant nation wide
									</div>
									
								</div>
								
							</div>
							
							<div class="col-sm-4 mb-20-xs">
							
								<div class="featured-sm-item clearfix">
									
									<div class="icon">
										<i class="flaticon-thick-shaking-hands"></i>
									</div>
									
									<div class="content">
									Customers trust our platform for improved customer expereience 
									</div>
									
								</div>
								
							</div>
							
							<div class="col-sm-4 mb-30-xs">
								
								<div class="featured-sm-item clearfix">
									
									<div class="icon">
										<i class="flaticon-thick-big-cogwheel"></i>
									</div>
									
									<div class="content">
										Our platform  is very easy to use for both users and merchant
									</div>
									
								</div>
								
							</div>
							
						</div>
					
					</div>
				
				</div>
			
			</div>


			<div class="pt-80 pb-50">
			
				<div class="container">

					<div class="category-group-wrapper with-background">
					
						<div class="row">
					
							
							<div class="col-sm-4">
								
								<div class="category-group">
									
									<div class="icon">
										<img src="images/11.png" alt="Images" width="240" height="240" />
									</div>
									
									<h4>ATM Service</h4>
									<p class="mt-15">Request for your ATM from the comfort of your home.</p>
									<br>
									
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								
								</div>
							
							</div>
							
							<div class="col-sm-4">
								
								<div class="category-group">
									
									<div class="icon">
										<img src="images/banker.png" alt="Images" width="240" height="240" />
									</div>
									
									<h4>Banking</h4>
									<p class="mt-15">Create an account from any of our merchant.</p>
									
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								
								</div>
							
							</div>
							
							<div class="col-sm-4">
								
								<div class="category-group">
									
									<div class="icon">
										<img src="images/crm.png" alt="Images" width="240" height="240" />
									</div>
									
									<h4>Customers experience</h4>
									<p class="mt-15">Providing a good customer service.</p>
									<br>
									<br>
									
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								
								</div>
							
							</div>
							
							<div class="clear"></div>
							
							
						</div>
						
					</div>

				</div>

			</div>

			
			
			
			
			<div class="image-bg-wrapper counting-wrapper" style="background-image:url('images/about-us-image-bg.jpg');">
			
				<div class="container mt-10">
				
					<div class="row">
					
						<div class="col-md-10 col-md-offset-1">
						
							<div class="row">
						
								<div class="col-sm-6 col-md-3">
								
									<div class="counting-item">
									
										<div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="13254" ></span></div>
										
										Our customers
										
									</div>
								
								</div>
								
								<div class="col-sm-6 col-md-3">
								
									<div class="counting-item">
									
										<div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="875" ></span></div>
										
										Merchants
										
									</div>
								
								</div>

								<!--<div class="col-sm-6 col-md-3">
								
									<div class="counting-item">
									
										<div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="5845" ></span></div>
										
										Candidates
										
									</div>
								
								</div>-->
								
								<div class="col-sm-6 col-md-3">
								
									<div class="counting-item">
									
										<div class="counting-number h1"><span class="counter" data-decimal-delimiter="," data-thousand-delimiter="," data-value="245" ></span></div>
										
										Locations
										
									</div>
								
								</div>
								
							</div>
						
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<!--<div class="container pt-80 pb-80">

				<div class="row">
					
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					
						<div class="section-title">
						
							<h3>many folks so far using findJob work in the companies </h3>
							
						</div>
					
					</div>
				
				</div>
				
				<div class="row gap-40">
				
					<div class="col-xs-4 col-sm-2 mb-20">
						<img src="images/brands/10.png" alt="image" />
					</div>
					
					<div class="col-xs-4 col-sm-2 mb-20">
						<img src="images/brands/02.png" alt="image" />
					</div>
					
					<div class="col-xs-4 col-sm-2 mb-20">
						<img src="images/brands/04.png" alt="image" />
					</div>
					
					<div class="col-xs-4 col-sm-2 mb-20">
						<img src="images/brands/18.png" alt="image" />
					</div>
					
					<div class="col-xs-4 col-sm-2 mb-20">
						<img src="images/brands/16.png" alt="image" />
					</div>
					
					<div class="col-xs-4 col-sm-2 mb-20">
						<img src="images/brands/14.png" alt="image" />
					</div>
				
				</div>
				
				<div class="clear mt-60"></div>
				<div class="bb"></div>
				<div class="clear mb-80"></div>
				
				<div class="row">
					
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					
						<div class="section-title mb-50">
						
							<h2>you can be the next</h2>
							<p>But extremity sex now education concluded earnestly her continual.</p>
							
						</div>
					
					</div>
				
				</div>
				
				<div class="text-center">
					<a href="#" class="btn btn-lg btn-primary">Post a job</a>
					<a href="#" class="btn btn-lg btn-primary mt-5-xss">Upload resume</a>
				</div>
			
			</div>-->

			<br>
			<br>
			<br>
		<?php
		include_once('inc/footer.php');
		?>