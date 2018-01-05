<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Utils\CommonTrait;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
	use CommonTrait;
	
    public function getCollection(Request $request)
    {
        // $url = config('lenderdashboard.transaction.url.transactionCount');
        // $date = $this->getDateDetails($request);
        // $input['date'] = $date;
        // $input['filterDate']['start'] = Carbon::now()->subWeek(1)->format('Y-m-d');
        // $input['filterDate']['end'] = Carbon::now()->addDay(1)->format('Y-m-d');
        
        // $total = $this->callDataLayerApi($url, $type = 'auth', $input);
        // $param = [];

        // if(empty($request->get('search')) === false) {
        //     $param['search'] = $request->get('search');
        // }
        // $page1 = 0;
        // $page2 = 2;

        // if(empty($request->get('page')) === false) {
        //     $param['page'] = $request->get('page');
        //     $page1 = $request->get('page')-1;
        //     $page2 = $request->get('page')+1;
        // }
        // $param['type'] = $request->route()->getName();
        // $endpoint = config('lenderdashboard.transaction.url.transaction');
        // $result = $this->callDataLayerApi($endpoint, $type = 'auth', $param);
        // $collections = [];
        // $count = $filterCount= [];
        // $lastTransaction = 0;

        // if($result['status'] == 200) {

        //     if(empty($result['bodyContent']['data']['userTransactions']) === false) {
        //         $collections = $result['bodyContent']['data']['userTransactions'];
        //     } 

        //     if (empty($total['bodyContent']['data']['count']) === false) {
        //         $count = $total['bodyContent']['data']['count'];
        //     }

        //     if(empty($total['bodyContent']['data']['filterCount']) === false) {
        //         $filterCount = $total['bodyContent']['data']['filterCount'];
        //     }

        //     if (empty($result['bodyContent']['data']['lastTransaction']) === false) {
        //         $lastTransaction = $result['bodyContent']['data']['lastTransaction'];
        //     }
        $filterCount = ['pending' => 100, 'processed' => 40, 'approved' => 60];
           $collections = 1; $date = 2; $count = 3; $page1 = 5; $page2 = 6;
            return view('dashboard.analysispage', ['collections' => $collections, 'date' => $date, 'count' => $count, 'filterCount' => $filterCount, 'page1' => $page1, 'page2' => $page2] );
        
    
    }
}
