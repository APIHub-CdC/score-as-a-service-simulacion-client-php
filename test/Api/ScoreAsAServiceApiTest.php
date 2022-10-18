<?php

namespace ScoreAsAService\Client;

use \ScoreAsAService\Client\Configuration;
use \ScoreAsAService\Client\ApiException;
use \ScoreAsAService\Client\ObjectSerializer;
use \ScoreAsAService\Client\Model\RequestDatosHistoricos;
use \ScoreAsAService\Client\Model\RequestDatos;
use \ScoreAsAService\Client\Model\RequestScorePromedio;
use \ScoreAsAService\Client\Api\ScoreAsAServiceApi;
use \ScoreAsAService\Client\Model\RequestConsulta;
use \ScoreAsAService\Client\Model\RequestValidaScore;

use GuzzleHttp\Client as HttpClient;

class ScoreAsAServiceApiTest extends \PHPUnit_Framework_TestCase
{
    private $apiKey;
    private $httpClient;
    private $config;
    
    public function setUp()
    {
        $this->apiKey = "your_x_api_key";
	    $apiUrl = "https://services.circulodecredito.com.mx/sandbox/v1/scoreAsaService";

	    $this->config = new Configuration();
	    $this->config->setHost($apiUrl);

	    $this->httpClient = new HttpClient();
    }
    
      
    public function testDatosHistoricosPost()
    {
        $requestPayload = new RequestDatosHistoricos();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $client = new ScoreAsAServiceApi($this->httpClient, $this->config);
            $response = $client->datosHistoricosPost($this->apiKey, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
    
    public function testObtenFechasPost()
    {
        $requestPayload = new RequestDatos();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $client = new ScoreAsAServiceApi($this->httpClient, $this->config);
            $response = $client->obtenFechasPost($this->apiKey, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
    
    public function testObtenPromediosPost()
    {
        $requestPayload = new RequestScorePromedio();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $client = new ScoreAsAServiceApi($this->httpClient, $this->config);
            $response = $client->obtenPromediosPost($this->apiKey, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
    
    public function testObtenerConsultasPost()
    {
        $requestPayload = new RequestConsulta();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $client = new ScoreAsAServiceApi($this->httpClient, $this->config);
            $response = $client->obtenerConsultasPost($this->apiKey, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
    
    public function testValidaScorePost()
    {
        $requestPayload = new RequestValidaScore();
	    $requestPayload->setNperscve("000000000");
        $response = null;
        try {

            $client = new ScoreAsAServiceApi($this->httpClient, $this->config);
            $response = $client->validaScorePost($this->apiKey, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

	    $this->assertNotNull($response);
    }
}
