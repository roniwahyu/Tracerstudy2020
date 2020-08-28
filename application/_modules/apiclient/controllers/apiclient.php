<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// use GuzzleHttp;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class Apiclient extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function test(){
		$client = new GuzzleHttp\Client();
		$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

		echo $response->getStatusCode(); // 200
		echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
		echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

		// Send an asynchronous request.
		$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
		$promise = $client->sendAsync($request)->then(function ($response) {
		    echo 'I completed! ' . $response->getBody();
		});

		$promise->wait();
	}
	public function indexx()
	{
				# guzzle client define
		  $client     = new GuzzleHttp\Client();
		  
		  #This url define speific Target for guzzle
		  $url        = 'https://www.bukalapak.com';

		  #guzzle
		  try {
		    # guzzle post request example with form parameter
		    $response = $client->request( 'POST', 
		                                   $url, 
		                                  [ 'form_params' 
		                                        => [ 'processId' => '2' ] 
		                                  ]
		                                );
		    #guzzle repose for future use
		    echo $response->getStatusCode(); // 200
		    echo $response->getReasonPhrase(); // OK
		    echo $response->getProtocolVersion(); // 1.1
		    echo $response->getBody();
		  } catch (GuzzleHttp\Exception\BadResponseException $e) {
		    #guzzle repose for future use
		    $response = $e->getResponse();
		    $responseBodyAsString = $response->getBody()->getContents();
		    print_r($responseBodyAsString);
		  }
	
	}


}

/* End of file apiclient.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/modules/apiclient/controllers/apiclient.php */ ?>