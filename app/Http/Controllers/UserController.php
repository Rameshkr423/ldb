<?php

namespace App\Http\Controllers;

use Storage;
use Response;
use App\Utils\CommonTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
	use CommonTrait;

    public function userEdit($id)
    {
    	$endpoint = config('lenderdashboard.transaction.url.userDetails');
    	$input['transId'] = $id;
        $result = $this->callDataLayerApi($endpoint, $type = 'auth', $input);
        $userDetails = [];
        $abilityConversion = [];
        
        if($result['status'] == 200) {

            if(empty($result['bodyContent']['data']['userDetails']) === false) {
                $userDetails = $result['bodyContent']['data']['userDetails'];
                
                $income = $this->getMonthlyDisposableIncome($userDetails);
            } 
            
            return view('customer.view', ['userDetails' => $userDetails, 'income' => $income]);
        } 
        return redirect()->back()->with('error', 'Internal server error please login after sometimes');
    }

    public function getMonthlyDisposableIncome($detail)
    {
        $minmumIncome = $expense = $income = [];

        if(empty($detail['output']['ability']['saltypeValueConf']) === false) {
            $fullData = array_pluck($detail['output']['ability']['saltypeValueConf'], 'income', 'confidence');
            $maxKey = max(array_keys($fullData));
            $minValue = $fullData[$maxKey];
            $minmumIncome['minSalary'] = $minValue;
            $minmumIncome['maxConfidence'] = $maxKey;
            $minmumIncome['data'] = $detail['output']['ability'];

            $emi = max(empty($detail['output']['ability']['saltypeValueConf']['creditReportIncome']['income'])===false ? $detail['output']['ability']['saltypeValueConf']['creditReportIncome']['income'] : 0, empty($detail['output']['ability']['saltypeValueConf']['smsIncome']['income']) === false ? $detail['output']['ability']['saltypeValueConf']['smsIncome']['income'] : 0);

            foreach ($detail['output']['ability']['saltypeValueConf'] as $key => $value) {
                $expense[$key]['expense'] = 0.3*$value['income'];
                $income[$key]['disposable'] = ($value['income'] - $expense[$key]['expense'] - $emi);
            }
            $minmumIncome['disposable'] = min(array_pluck($income, 'disposable'));

            return $minmumIncome;
        }
    }

    public function downloadDocument(Request $request)
    {
        try {
            if (empty($request->get('path')) === false) {
                $fileName = basename($request->get('path'));
                $path = $request->get('path');
                $filePath = basename(str_replace($fileName, '', $path));
                try {
                    if (empty($filePath) === false && Storage::disk('s3')->exists($filePath.'/'.$fileName)) {
                        $fileContent = Storage::disk('s3')->get($filePath.'/'.$fileName);
                        return Response::make($fileContent, 200, [
                            'Content-Type' => 'application/pdf',
                            'Content-Disposition' => 'attachement; filename'.$filePath.'/'.$fileName,
                        ]);
                    } else {
                        return redirect()->back()->with('error', 'Document not found on s3 Storage.');
                    }
                } catch (\Exception $e) {
                    $error = sprintf('Error: --- %s: File: %s , Line: %s', get_class($e), $e->getMessage(), $e->getFile(), $e->getLine());
                    \Log::info('exception in s3 doc retrivel : '.$error);
                }
            } else {
                return redirect()->back()->with('error', 'Document path not found on DB against Transaction ID.');
            }
        } catch (\Exception $e) {
            \Log::info('exception in doc download '.json_encode($e->getMessage()));
        }

        return true;
    }
}
