<?php 
	Include("dbSettings.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
	<title>Automated Greenhouse Project</title>
	<link href='css/style.css' rel='stylesheet' type='text/css'  media='all' />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'/>
	
	<script type="text/JavaScript">
	function timeRefresh(timeoutPeriod) 
	{
		setTimeout("location.reload(true);",timeoutPeriod);
	}
	</script>
	
	</head>
	<body onLoad="JavaScript:timeRefresh(5000);">
	<!--start-header-->
	<div class='header'>
	<div class='wrap'>
	<!--start-logo-->
	<div class='logo'>
	<a href='index.php'><img src='images/logo.png' title='logo' alt=''/></a>
	</div>
	<div class='clear'> </div>
	<!--end-logo-->
	</div>
	</div>
	<div class='clear'> </div>

			<div class="wrap">
					<!---start-content-->
					<div class="content">
					<div class="services">

					<div class="section group">
						<div class="intro">					
						<h4>Temperature:</h4><br/>
						<p></p><br/>
						<?php echo cTemp();	?>
						</div>
						<div class="intro">					
						<h4>Light:</h4><br/>
						<p></p><br/>
						<?php echo cLight();	?>						
						</div>
					</div>	
					<div class="clear"> </div><br/>
						<div class='section group'>
							<div class='listview listview_images'>
							<div class='listimg listview_img'>
							<a href="graph.php"><img src="images/graph.png" alt=''/></a>
							</div>
							<div class='text listview_text'>
							<h3>Graph</h3>
							</div>
							</div>
							
							<div class='listview listview_images'>
							<div class='listimg listview_img'>
							<a href="control.php"><img src="images/button.png" alt=''/></a>
							</div>
							<div class='text listview_text'>
							<h3>Switches</h3>
							</div>
							</div>
							<div class='listview listview_images'>
							<div class='listimg listview_img'>
							<a href="http://adamcoursework.byethost31.com/sms.php"><img src="images/alerts.png" alt=''/></a>
							</div>
							<div class='text listview_text'>
							<h3>SMS Alert</h3>
							</div>
							</div>
							
							<div class='listview listview_images'>
							<div class='listimg listview_img'>
							<a href="settings.php"><img src="images/settings.png" alt=''/></a>
							</div>
							<div class='text listview_text'>
							<h3>Settings</h3>
							</div>
							</div>
						</div>
					</div>
					<!--End-content-->
					<div class="clear"> </div>
				</div>				
			</div>
	</body>
</html>

