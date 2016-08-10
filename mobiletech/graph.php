<?php
	include('header.php');
?>
			<div class="wrap">
					<!---start-content---->
					<div class="content">
						
					<div class="services">	
					<div class="clear"> </div><br />	

					<h4>Temperature and Luminosity Data Logger</h4><br/>
					<p></p><br/>
					
					<table>
						<thead>
							<tr>
							<th>Date & Time</th>
							<th>External Temperature</th>
							<th>Internal Temperature</th>
							<th>Luminosity</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include('pagination.php');
							?>
						</tbody>
					</table>
					<div class="clear"> </div>
					</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
	</body>
</html>

