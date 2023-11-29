<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));?>
<header>
	<div class="top-header">
		<div class="container-fluid d-flex align-items-center justify-content-between">
			<div class="topHeader-cont">
				<p>
				Earnings beats underwhelm as Wall Street looks for good news <b>3:49pm EST</b> UPDATE 2-Fed's Bullard says U.S. unemployment rate can go below 3%
				</p>
			</div>
	
			<div class="d-flex align-items-center">
				<div class="topHeader-search">
					<input type="text" placeholder="Search">
					<button><i class="fas fa-search"></i></button>
				</div>
		
				<div class="topHeader-btn">
					<div class="tpBtn-language">
						<a href="#">English <i class="fas fa-caret-down"></i></a>
					</div>
					
					<?php if(!isset($_SESSION['sessionuser'])) { ?> 
					<div class="tpBtn-login">
						<a href="#" class="loginUp">Login</a>
					</div>
					<div class="tpBtn-register">
						<a href="#" class="signUp">Register</a>
					</div>
					<?php } else { ?>
					<div class="tpBtn-language">
					
						<a href="#" > <?php echo $_SESSION['sessionuser']	?> </a>
						<a href="#"  id="logout" >Logout</a>
					</div>	
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="main-header largemenu">
		<div class="container-fluid">
			<div class="menu-Bar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="row align-items-center">
				<div class="col-md-4 text-start">
					<ul class="menu m-0 p-0">
						<li class="dropdown-nav m-0">
							<a href="#">About Us</a> <i class="fas fa-caret-down"></i>

							<ul class="dropdown">
								<li><a href=<?php echo $siteurl."about-us.php" ?> >About JMI</a></li>
								<li><a href=<?php echo $siteurl."licenses.php" ?>>Licenses and Regulations</a></li>
								<li><a href=<?php echo $siteurl."risk-management.php" ?>>Risk Management</a></li>
								<li><a href=<?php echo $siteurl."our-culture.php" ?> >Our Culture</a></li>
								<li><a href=<?php echo $siteurl."ourphilosophy.php" ?> >Our Philosophy</a></li>
								<li><a href=<?php echo $siteurl."brokers.php" ?> >Advantages of JMI Brokers Platform</a></li>
								<li><a href=<?php echo $siteurl."contact-us.php" ?>>Contact us</a></li>
								<li><a href=<?php echo $siteurl."policy.php" ?>>Conflict Of Interest Policy</a></li>
								<li><a href=<?php echo $siteurl."faq.php" ?>>FAQ's</a></li>
								<li><a href=<?php echo $siteurl."career.php" ?>>Careers</a></li>
								<li><a href=<?php echo $siteurl."partnership-programs.php" ?>>Partnership Programs</a></li>
							</ul>
						</li>
						<li class="dropdown-nav m-0">
							<a href="#">INVESTMENT CHOICES</a> <i class="fas fa-caret-down"></i>

							<ul class="dropdown">
								<li><a href=<?php echo $siteurl."forex-trading.php" ?>>Forex Trading</a></li>
								<li><a href=<?php echo $siteurl."precious-metal.php" ?>>Precious Metals Trading</a></li>
								<li><a href=<?php echo $siteurl."future.php" ?>>Future Energies Trading</a></li>
								<li><a href=<?php echo $siteurl."forex-trading.php" ?>>Indices Trading</a></li>
								<li><a href=<?php echo $siteurl."stock-cfds.php" ?>>Stocks CFDs</a></li>
								<li><a href=<?php echo $siteurl."commodities.php" ?>>Commodities</a></li>
							</ul>
						</li>
						<li class="dropdown-nav m-0">
							<a href="#">PLATFORMS</a> <i class="fas fa-caret-down"></i>

							<ul class="dropdown">
								<li><a href=<?php echo $siteurl."forex-platform.php" ?>>Forex Platform</a></li>
								<li><a href=<?php echo $siteurl."metatrader.php" ?>>MetaTrader 4</a></li>
								<li><a href=<?php echo $siteurl."mt4-platform-overview.php" ?>>Mt4 Platform Overview</a></li>
								<li><a href=<?php echo $siteurl."iphone-ipad.php" ?>>IPhone and IPad</a></li>
								<li><a href=<?php echo $siteurl."android.php" ?>>Android</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-4 text-center">
					<a href="./" class="logo">
						<img src=<?php echo $siteurl."assets/images/logo.png"; ?> alt="404">
					</a>
				</div>
				<div class="col-md-4 text-end">
					<ul class="menu m-0">
						<li class="dropdown-nav m-0">
							<a href="#">PARTNERSHIP</a> <i class="fas fa-caret-down"></i>

							<ul class="dropdown">
								<li><a href=<?php echo $siteurl."how-to-become.php" ?>>Become Our Partner</a></li>
								<li><a href=<?php echo $siteurl."business.php" ?>>Why to Make Business with JMI</a></li>
								<li><a href=<?php echo $siteurl."brokers.php" ?>>Introducing Brokers</a></li>
								<li><a href=<?php echo $siteurl."money-manager.php" ?>>Money Manager Program</a></li>
								<li><a href=<?php echo $siteurl."how-to-become-money-managers.php" ?>>How To Become a Money Mangers</a></li>
								<li><a href=<?php echo $siteurl."white-label.php" ?>>White Labels</a></li>
							</ul>
						</li>
						<li class="dropdown-nav m-0">
							<a href="#">TOOLS</a> <i class="fas fa-caret-down"></i>

							<ul class="dropdown">
								<li><a href=<?php echo $siteurl."calendar.php" ?>>Economic Calendar</a></li>
								<li><a href=<?php echo $siteurl."pip-calculator.php" ?>>Pip Calculator</a></li>
								<!--<li><a href="#">Heatmap</a></li>-->
								<li><a href=<?php echo $siteurl."dailyfundamental.php" ?>>Fundamental Analysis</a></li>
								<!--<li><a href="#">Technical Analysis</a></li>-->
								<li><a href=<?php echo $siteurl."download-file.php" ?> >Download Files</a></li>
							</ul>
						</li>
						
						<li class="nav-btn m-0"><a href="contact-us.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="main-header shortmenu">
		<div class="container-fluid">
			<div class="menu-Bar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="row align-items-center">
				<div class="col-md-12 text-center">
					<a href="./" class="logo">
						<img src=<?php echo $siteurl."assets/images/logo.png" ?> alt="">
					</a>
				</div>
				<div class="col-md-4 text-end">
					<div class="menuWrap">
						<ul class="menu">
							<li class="dropdown-nav">
								<a href="#">About Us</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="about-us.php">About JMI</a></li>
									<li><a href="licenses.php">Licenses and Regulations</a></li>
									<li><a href="risk-management.php">Risk Management</a></li>
									<li><a href="our-culture.php">Our Culture</a></li>
									<li><a href="ourphilosophy.php">Our Philosophy</a></li>
									<li><a href="brokers.php">Advantages of JMI Brokers Platform</a></li>
									<li><a href="contact-us.php">Contact us</a></li>
									<li><a href="policy.php">Conflict Of Interest Policy</a></li>
									<li><a href="faq.php">FAQ's</a></li>
									<li><a href="career.php">Careers</a></li>
									<li><a href="partnership-programs.php">Partnership Programs</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#">INVESTMENT CHOICES</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="forex-trading.php">Forex Trading</a></li>
									<li><a href="precious-metal.php">Precious Metals Trading</a></li>
									<li><a href="future.php">Future Energies Trading</a></li>
								    <li><a href="forex-trading.php">Indices Trading</a></li>
									<li><a href="stock-cfds.php">Stocks CFDs</a></li>
									<li><a href="commodities.php">Commodities</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#">PLATFORMS</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="forex-platform.php">Forex Platform</a></li>
									<li><a href="metatrader.php">MetaTrader 4</a></li>
									<li><a href="mt4-platform-overview.php">Mt4 Platform Overview</a></li>
									<li><a href="iphone-ipad.php">IPhone and IPad</a></li>
									<li><a href="android.php">Android</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#">PARTNERSHIP</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="how-to-become.php">Become Our Partner</a></li>
									<li><a href="business.php">Why to Make Business with JMI</a></li>
									<li><a href="brokers.php">Introducing Brokers</a></li>
									<li><a href="money-manager.php">Money Manager Program</a></li>
									<li><a href="how-to-become-money-managers.php">How To Become a Money Mangers</a></li>
									<li><a href="white-label.php">White Labels</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#">TOOLS</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="calendar.php">Economic Calendar</a></li>
									<li><a href="pip-calculator.php">Pip Calculator</a></li>
									<!--<li><a href="#">Heatmap</a></li>-->
									<li><a href="dailyfundamental.php">Fundamental Analysis</a></li>
									<!--<li><a href="#">Technical Analysis</a></li>-->
									<li><a href="download-file.php">Download Files</a></li>
								</ul>
							</li>
							<li class="nav-btn"><a href="contact-us.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// echo $uriSegments[3];

$routeName = ''; // Initialize $routeName

if ($uriSegments[3] === "account-overview.php") {
	$routeName = "Account Overview";
} else if ($uriSegments[3] === "open-live-account.php") {
	$routeName = "Open Live Account";
} else if ($uriSegments[3] === "open-demo-account.php") {
	$routeName = "Open Demo Account";
} else if ($uriSegments[3] === "add-existing-account.php") {
	$routeName = "Add Existing Account";
} else if ($uriSegments[3] === "live-account.php") {
	$routeName = "Live Account";
} else if ($uriSegments[3] === "deposit.php") {
	$routeName = "Deposit";
} else if($uriSegments[3] === "withdraw.php") {
	$routeName = "Withdraw";
} else if($uriSegments[3] === "internal-transfers.php") {
	$routeName = "Internal Transfers";
} else if($uriSegments[3] === "copy-trade.php") {
	$routeName = "Copy Trade";
} else if($uriSegments[3] === "transactional-history.php") {
	$routeName = "Transactional History";
} else if($uriSegments[3] === "referral-system.php") {
	$routeName = "Referral System";
} else if($uriSegments[3] === "my-referral.php") {
	$routeName = "My Referral";
} else if($uriSegments[3] === "password-change.php") {
	$routeName = "Password Change";
} else if($uriSegments[3] === "download-center.php") {
	$routeName = "Download Center";
} else if($uriSegments[3] === "ebooks.php") {
	$routeName = "Ebooks";
} else if($uriSegments[3] === "economic-calendar.php") {
	$routeName = "Economic Calendar";
} else if($uriSegments[3] === "pip-calculators.php") {
	$routeName = "Pip Calculators";
} else if($uriSegments[3] === "forex-heatmap.php") {
	$routeName = "Forex Heatmap";
}
?>

<?php if(!isset($_SESSION['sessionuser'])) { ?> 
	<div></div>
	<?php } else { ?>
	<div class="dashboard-subheader-bg">
	<div class="dashboard-subheader-box">
		<div class="position">
			<h5 class="text-white fs-5 mb-2">Control Panel |<?php echo $routeName; ?></h5>
			<p class="text-white font-size">Home > Dashboard > <?php echo $routeName; ?></span></p>
		</div>
	</div>
</div>
<?php } ?>


<script>
   $(document).ready(function(){
	$('#logout').on('click',function(e){
		 
	$.ajax({
         url: 'includes/softwareinclude/logout.php',
		 type:'POST',
		 success: function(response)
		 {
			alert(response);
			window.location.href = "index.php";
		 },
		 error: function(xhr,status,error){
			console.log("error",error);
		 }

	});
});
})
</script>