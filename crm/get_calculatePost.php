<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

	
	$postArray['aircompany_rate'] = $_POST['aircompany_rate'];
	$postArray["ticket"] = $_POST["ticket"];
	$postArray['agent_f_r_t'] = $_POST['agent_f_r_t'];
	$postArray['new_n_r_t'] = $_POST['new_n_r_t'];
	

	$url = "http://127.0.0.1:8000/api/rates/calculate";
		$content = json_encode($postArray);

		$curl = curl_init($url);

		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

	 	$json_response = curl_exec($curl);
	 	$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

	 	curl_close($curl);

	 	 $response = json_decode($json_response, TRUE);

	 //	 echo json_encode($postArray);

	 	 echo 'Your cash back '.$response;

	 	
	 	

	 	
	 	
	// 	header("Location:/index.php/");	
	 	


	 	



}
else
	header("Location:/index.php");	