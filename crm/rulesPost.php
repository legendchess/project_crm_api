<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$result = 'create_rules.php?createrror';


	// if (isset($_POST['aircompany_rate']&&isset($_POST['non_r_tax_t'])&&isset($_POST['non_r_tax_a'])&&isset($_POST['agent_fees'])&&isset($_POST['aircompany_fees'])))
	// if(!empty($_POST['aircompany_rate'])&&!empty($_POST['non_r_tax_t'])&&!empty($_POST['non_r_tax_a'])&&!empty($_POST['agent_fees'])&&!empty($_POST['aircompany_fees'])) 
	
	// if($a > $b)
	// {

		$myhash = md5_file($_FILES['hash_fileq']['tmp_name']);
		

		$postArray["aircompany_rate"] = $_POST["aircompany_rate"];
		$postArray["non_r_tax_t"] = $_POST["non_r_tax_t"];
		$postArray["non_r_tax_a"] = $_POST["non_r_tax_a"];
		$postArray["aircompany_fees"] = $_POST["aircompany_fees"];
		$postArray["agent_fees"] = $_POST["agent_fees"];
		$postArray["fees_type"] = $_POST["fees_type"];
		$postArray["hash_fileq"] = $myhash;

		$url = "http://127.0.0.1:8000/api/rates";
		$content = json_encode($postArray);

		$curl = curl_init($url);

		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

	 	$json_response = curl_exec($curl);

	// 	$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

	// if ( $status != 201 ) {
	//     die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
	// }

		curl_close($curl);
		
		
		header('location:index.php?accept');
	// }
	// else
	// {
	// 	header('location:goal.php');
	// }


//	header('location:index.php?$qw');
}
else
	header('location:index.php?error');