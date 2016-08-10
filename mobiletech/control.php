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

					<h4>Manually Control the GreenHouse</h4><br/>
					<p></p><br/>
					
					<div class="section group">
						<?php echo fanColor();	?>				
						<h4>Fan Status:</h4><br/>
						<p></p><br/>
						<?php echo fanStatus();	?>
						</div>
					</div>
					
					<div class="section group2">
						<div class="intro">		
						<?php echo fanButton();	?>					
						</div>
					</div>
					
					<div class="clear"> </div>
					<div class="space"> </div>
					<div class="section group">
						<?php echo heaterColor();	?>					
						<h4>Heater Status:</h4><br/>
						<p></p><br/>
						<?php echo heaterStatus();	?>
						</div>
					</div>
					
					<div class="section group2" >
						<div class="intro">					
						<?php echo heaterButton();	?>
						</div>
					</div>
					
					<div class="clear"> </div>
					<div class="space"> </div>
					<div class="section group">
						<?php echo autoColor();	?>					
						<h4>AutoClimate:</h4><br/>
						<p></p><br/>
						<?php echo autoStatus();	?>
						</div>
					</div>
					
					<div class="section group2" >
						<div class="intro">					
						<?php echo autoButton();	?>
						</div>
					</div>
					
					<div class="clear"> </div>
					</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
	</body>
</html>

