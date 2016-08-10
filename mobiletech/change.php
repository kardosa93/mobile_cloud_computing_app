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
					$func = $_GET['func'];
					
					Include("agent.php");
					
						try {
							Include("connect_pdo.php");
							$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							if ($func == 'fon')
							{
								//$sql = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `fanStatus` =  'ON'";
								$ch = curl_init($agent."?fan=1");
							} else if ($func == 'foff')
							{
								//$sql = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `fanStatus` =  'OFF'";
								$ch = curl_init($agent."?fan=0");
							} else if ($func == 'hon')
							{
								//$sql = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `heaterStatus` =  'ON'";
								$ch = curl_init($agent."?heater=1");
							} else if ($func == 'hoff')
							{
								//$sql = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `heaterStatus` =  'OFF'";
								$ch = curl_init($agent."?heater=0");
							}  else if ($func == 'aon')
							{
								//$sql = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `auto` =  'ON'";
								$ch = curl_init($agent."?auto=1");
							}  else if ($func == 'aoff')
							{
								//$sql = "UPDATE  `sql1206633`.`greenhouseSettings` SET  `auto` =  'OFF'";
								$ch = curl_init($agent."?auto=0");
							}  
							
							// use exec() because no results are returned
							//$db->exec($sql);
							echo "</div>";
							echo "<div class='authentication-form'>";
							echo "<div class='services'>";
							echo "<h7>Successful</h7></div><br />";
							$link = 'location.href="control.php"';
							echo "<input type=button onClick='$link' value='GO BACK'/>";
							echo "</div>";
							
							curl_exec($ch);
							
							}
							catch(PDOException $e)
							{
							echo $sql . "<br>" . $e->getMessage();
							}
						$db = null;
					?>
					
					<div class="clear"> </div>
					</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
	</body>
</html>

