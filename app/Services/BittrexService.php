<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Collection;
use GuzzleHttp\Client;

class BittrexService
{
    private $baseUrl;
    private $timeout;
    private $http;
    private $headers;
    private $key;
    private $secret;

    public function __construct()
    {
        $this->baseUrl = config('services.bittrex.baseUrl');
        $this->timeout = config('services.bittrex.timeout');
     
        $this->headers = [
            'cache-control' => 'no-cache',
            'content-type' => 'application/json',
        ];
    }

    private function buildResponse(string $uri = null)
    {
        $apiUrl = $this->baseUrl.$uri;
        $client = new Client();
        $request = $client->get($apiUrl, [
            'headers'         => $this->headers,
            'timeout'         => $this->timeout,
            'connect_timeout' => true,
            'http_errors'     => true,
        ]);

        $response = $request ? $request->getBody()->getContents() : null;
        $status = $request ? $request->getStatusCode() : 500;

        if ($response && $status === 200 && $response !== 'null') {
            return (object) json_decode($response);
        }

        return null;
    }

    public function getTickerPrice(string $symbol = 'LTC-BTC')
    {
        return $this->buildResponse('markets/'.$symbol.'/ticker');
    }
}
