<?php

namespace Hopjob\FrontBundle\Services;

class Http
{    
    public function performRequest($params)
    {
    	
    	$siteUrl = "localhost/CESI/hopjob/hopjobrest/web/app_dev.php/".$params; // dev
    	// $siteUrl = "localhost/CESI/hopjob/rest/web/app_dev.php/".$params; // prod

    	//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$siteUrl);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);

		return json_decode($result, true);
    }
}