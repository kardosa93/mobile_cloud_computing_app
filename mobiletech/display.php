<?php
	include('header.php');
?>
				<div class="header-nav">
					<div class="wrap">
					<div class="left-nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="listing.php">Business Listing</a></li>
							<li><a href="submit.php">Submit Business</a></li>
							<li><a href="tutor.php">Tutor Page</a></li>
							<li><a href="admin.php">Admin</a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<!---end-header---->
			<div class="wrap">
					<!---start-content---->
					<div class="content">
						
					<div class="services">	
					<h5>Business Listings</h5>	
					</div><br/>
					<div class="clear"> </div><br />					
					<table>
						<thead>
							<tr>
							<th>Date & Time</th>
							<th>External Temperature</th>
							<th>Internal Temperature</th>
							<th>Humidity</th>
							</tr>
						</thead>
						<tbody>
							<?php
								require_once __DIR__ . '/db_connect.php';
								$db = new DB_CONNECT();
								$result = mysql_query("SELECT date_time, ext_temperature, int_temperature, humidity FROM greenhouse") or die(mysql_error());
								// while there are rows to be fetched...
								while ($row = mysql_fetch_assoc($result)) {
								   // echo data
									echo "<tr>";
									echo "<td>".$row['date_time']."</td>";
									echo "<td>".$row['ext_temperature']."</td>";
									echo "<td>".$row['int_temperature']."</td>";
									echo "<td>".$row['humidity']."</td>";
									echo "</tr>";
								} // end while
							?>
						</tbody>
					</table>
					<div class="clear"> </div>
					</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
		<!---start-footer---->
		<?php
			include('footer.php');
		?>
		<!---end-footer---->
	</body>
</html>

