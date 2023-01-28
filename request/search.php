<?php 

$data = array("query" => $_POST['query'], "optional_comment" => $_POST['optional_comment']); 
$data_string = json_encode($data);
$ch = curl_init('http://3.110.203.211/summarisation/internal/ep1');  
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                       
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);        
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);              
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                     
	'Content-Type: application/json',                                                     
	'Content-Length: ' . strlen($data_string))                                 
);                                                                                        
$result = curl_exec($ch);
print_r($result);

?>