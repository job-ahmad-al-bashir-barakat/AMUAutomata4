<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SecurityLabelController extends Controller
{
    public function checkCertificate(Request $request)
    {
        $this->validate($request, [
            'label_number' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
        $params['Language'] =  app()->getLocale();
        $params['SSeal_Number'] =  $request->label_number;
        $client = new Client(['base_uri' => 'http://82.137.244.75:3644']);
        $apiRequest = $client->get('api/Checking',[ 'query' => $params]);
        $response = $apiRequest->getBody();
        return $response;
    }
}
