<?php
namespace App\Utils;

use Session;
use Carbon\Carbon;
use GuzzleHttp\Client;

trait CommonTrait
{
	public function getGuzzleClient()
    {
        return app()->make(Client::class);
    }

    public function getApiAuthHeader()
    {
    	 $authToken = Session::get('data.auth_token.authorization');

    	if (empty($authToken) === false) {
    		return array_merge(config('lenderdashboard.header.login'), ['Authorization' => 'Bearer '.$authToken]);
    	}

    	return null;
    }

    public function getApiHeader()
    {
    	return config('lenderdashboard.header.login');
    }

    public function callDataLayerApi($endpoint, $type, $input = [])
    {
        
        if($type == 'auth') {
            $header = $this->getApiAuthHeader();
        } else {
            $header = $this->getApiHeader();
        }
        try {
            $response = $this->getGuzzleClient()->post($endpoint, 
                [
                    'headers' => $header,
                    'json' => $input
                ]
            );
            $output['bodyContent'] = [];
            $output['status'] = 404;
            
            if($response->getStatusCode()==200) {
                $body = $response->getBody()->getContents();
                
                $output['bodyContent'] = json_decode($body, true);
                $output['status'] = 200;
            } 
        } catch (\Exception $e) {
            \Log::error("Api Failure".basename($endpoint).'-'. $e->getMessage());

           $output['status'] = $e->getCode();
        }
        
        return $output;
    }

    public function getDateDetails($request)
    {
        $days = [];

        if(empty($request->get('block')) || empty($request->get('date'))) {
            $days['firstMonth'] = Carbon::now();
            $days['secondMonth'] = Carbon::now()->subMonth(1);
            $days['thirdMonth'] = Carbon::now()->subMonth(2);
        } else {
            if($request->get('block') === "forward") {
                $days['thirdMonth'] = Carbon::parse($request->get('date'))->startOfMonth()->addMonth(1);
                $days['secondMonth'] = Carbon::parse($request->get('date'))->startOfMonth()->addMonth(2);
                $days['firstMonth'] = Carbon::parse($request->get('date'))->startOfMonth()->addMonth(3);
            } else {
                $days['firstMonth'] = Carbon::parse($request->get('date'))->startOfMonth()->subMonth(1);
                $days['secondMonth'] = Carbon::parse($request->get('date'))->startOfMonth()->subMonth(2);
                $days['thirdMonth'] = Carbon::parse($request->get('date'))->startOfMonth()->subMonth(3);
            }
        }

        return $days;
    }
}