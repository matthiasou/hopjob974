<?php

namespace AppBundle\Service;

class Http
{    
    public function performRequest($siteUrl)
    {
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