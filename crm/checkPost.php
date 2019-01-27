<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

	$myhash = md5_file($_FILES['hash_fileq']['tmp_name']);

	$postArray["aircompany_rate"] = $_POST["aircompany_rate"];
	$postArray["hash_fileq"] = $myhash;

	$url = "http://127.0.0.1:8000/api/rates/check";
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
	 	
	 	


	 	if ($response){
	 		header("Location:index.php?accept");	
	 	}
	 	else{
	 		header('Location:update.php');
	 	}


	 	



}
else
	header("Location:index.php");	