<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://driesh.abertay.ac.uk/~g510572/sms/sendsms.cfm");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
$data = array(
     'mphone' => '07872603689',
     'smstext' => $'This is the message',
     'username' => 'g510572'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$output = curl_exec($ch);
curl_close($ch);
echo "Output".$output ;

?>