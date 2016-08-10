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
							$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, "http://driesh.abertay.ac.uk/~g510572/sms/sendsms.cfm");
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_POST, true);
							$data = array(
								 'mphone' => '07786202877',
								 'smstext' => 'smsr ALERT',
								 'username' => '1206633'
							);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
							$output = curl_exec($ch);
							curl_close($ch);
							echo "Output".$output ;
						
							// use exec() because no results are returned
							echo "</div>";
							echo "<div class='authentication-form'>";
							echo "<div class='services'>";
							echo "<h7>SMS Is Sent</h7></div><br />";
							$link = 'location.href="index.php"';
							echo "<input type=button onClick='$link' value='GO BACK'/>";
							echo "</div>";
					?>
					
					<div class="clear"> </div>
					</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
	</body>
</html>