<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ipAddress;
use Illuminate\Support\Facades\DB;

class ProxyController extends Controller
{
    public function proxy()
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, 'http://ipv4.webshare.io/');
        $result  = curl_exec($curl);
    
        $ipAddr = new ipAddress();
        $ipAddr->ipAddress = $result;
        $ipAddr->save();

        return view('MainView');
    }

    public function show()
    {
        $ipAddr = DB::table('ipaddresses')
                    ->select('ipAddress')
                    ->get();
        $count = count($ipAddr);

        $ipAddr = DB::table('ipaddresses')
                    ->select('ipAddress')
                    ->distinct()
                    ->get();

        return view('showView', compact('ipAddr','count'));
    }
}