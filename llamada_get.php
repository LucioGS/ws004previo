<?php

	$url = "localhost/000servicios/004/servidor/index.php/usuario";
	//$url = "localhost/000servicios/004/servidor/index.php/usuario/2";
	
	$url = str_replace(' ', '%20', $url);
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);
	$data = curl_exec($curl);
	curl_close($curl);
	$data_convertido = json_decode($data, true);
	print_r($data_convertido);
	
?>


