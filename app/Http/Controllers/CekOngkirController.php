<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CekOngkirController extends Controller
{
    //
    public function check(Request $request)
    {
        $data=[
            'origin'=>$request->asal,
            'destination'=>$request->tujuan,
            'weight'=>$request->berat,
            'courier'=>$request->kurir
        ];
        $client=new Client(['headers'=>[
            'key'=>env('RAJAONGKIR_KEY'),
            //'Authorization'=>env('APP_KEY_SEND_MAIL')
        ]]);
        $result=$client->post(env('RAJA_ONGKIR_ENDPOINT').'/cost',[
            'form_params'=>$data
            
        ]);
        $response=json_decode($result->getBody());
        //dd($response);
        return view('hasil')->with('list',$response);
    }
}
