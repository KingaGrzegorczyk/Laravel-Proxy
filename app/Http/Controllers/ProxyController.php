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
        curl_setopt($curl, CURLOPT_PROXY, 'http://p.webshare.io:80');
        curl_setopt($curl, CURLOPT_PROXYUSERPWD, 'sxvgafoe-rotate:hrx14z53g9i3');
        $result  = curl_exec($curl);
    
        $ipAddr = new ipAddress();
        $ipAddr->ipAddress = $result;
        $ipAddr->save();

        return view('MainView');
    }

    public function show()
    {
        $count = DB::table('ipaddresses')
                    ->select(\DB::raw('COUNT(ipAddress) as count'),'ipAddress')
                    ->groupby('ipAddress')
                    ->get();

  
        return view('showView', compact('count'));
    }
}