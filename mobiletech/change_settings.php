<?php
	include('header.php');
?>
			<div class="wrap">
					<!---start-content---->
					<div class="content">
						
					<div class="services">	
					<div class="clear"> </div><br />	
					<p></p><br/>
					
					<?php
					if($_POST['submit'] == "Change") 
					{
						Include("agent.php");
						
						try {
							
							$templow = $_POST['templow'];
							$temphigh = $_POST['temphigh'];
							
							Include("connect_pdo.php");

							$sql = "UPDATE `greenhouseSettings` SET `tempLow` =  '$templow', `tempHigh` =  '$temphigh' WHERE `greenhouseSettings`.`id` =1";
							$stmt = $db->query($sql);
							
							// use exec() because no results are returned
							echo "</div>";
							echo "<div class='authentication-form'>";
							echo "<div class='services'>";
							echo "<h7>Successful</h7></div><br />";
							$link = 'location.href="settings.php"';
							echo "<input type=button onClick='$link' value='GO BACK'/>";
							echo "</div>";
							
							$ch = curl_init($agent."?max=$temphigh");
							curl_exec($ch);
							$ch = curl_init($agent."?min=$templow");
							curl_exec($ch);
							
							
							}
							catch(PDOException $e)
							{
							echo $sql . "<br>" . $e->getMessage();
							}
						$db = null;
					}
					?>
					
					<div class="clear"> </div>
					</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
	</body>
</html>