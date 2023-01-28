<?php 
$ep1_query_id = $_POST['ep1_query_id'];
$para_ids = $_POST['para_ids'];
$prompt_1 = $_POST['prompt_1'];
$prompt_2 = $_POST['prompt_2'];

// print_r($para_ids);

$data = array("ep1_query_id" => $ep1_query_id, "para_ids" => $para_ids, "prompt_1"=>$prompt_1, "prompt_2"=>$prompt_2); 
$data_string = json_encode($data);
$ch = curl_init('http://3.110.203.211/summarisation/internal/ep2');  
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