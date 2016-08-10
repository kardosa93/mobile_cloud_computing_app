<?php 
	Include("dbSettings.php");
?>

<?php
	include('header.php');
?>

	<div class="wrap">
	<!---start-content---->
	<div class="content">
		<div class="services">	
		<div class="clear"> </div><br />					
		<div class="submit-form">
			<form action="change_settings.php" method="post">
			<div class="intro3">	
			<span><label>Temp Low</label></span>
			</div>
			<div class="intro3">	
			<span><input type="text" name="templow" value="<?php echo templow();?>"></span>
			</div>
			<div class="clear"> </div>
			<div class="space"> </div>
			<div class="intro3">
			<span><label>Temp High</label></span>
			</div>	
			<div class="intro3">	
			<span><input type="text" name="temphigh" value="<?php echo temphigh();?>"></span>
			</div>
			<div class="clear"> </div>
			<div class="space"> </div>
			<span><input type="submit" value="Change" name="submit"></span>
			<div class="clear"> </div>
			</form>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="space"> </div>
		</div>
	</div>
</body>
</html>

