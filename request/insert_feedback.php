<?php 
$ep1_query_id = $_POST['ep1_query_id'];
$ep2_query_id = $_POST['ep2_query_id'];
$comment = $_POST['comment'];
$score = $_POST['score'];

$data = array("ep1_query_id" => $ep1_query_id, "ep2_query_id" => $ep2_query_id, "comment"=>$comment, "score"=>$score); 
$data_string = json_encode($data);
$ch = curl_init('http://3.110.203.211/summarisation/feedback');  
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