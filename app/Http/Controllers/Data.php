<?php
namespace App\Http\Controllers;
use json_decode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    function  currency(){
        $dolar = Http::get('https://api.nbp.pl/api/exchangerates/rates/a/usd')->body();
         $all_lek = Http::get('https://api.nbp.pl/api/exchangerates/rates/b/all')->body();
         $euro = Http::get('https://api.nbp.pl/api/exchangerates/rates/a/eur')->body();
        $kun = Http::get('https://api.nbp.pl/api/exchangerates/rates/a/hrk')->body();
      $lewa = Http::get('https://api.nbp.pl/api/exchangerates/rates/a/bgn')->body();
 
    
  $new_dolar = json_decode($dolar, true);
  $new_lek = json_decode($all_lek, true); 
  $new_euro = json_decode($euro, true); 
  $new_kun = json_decode($kun, true);
  $new_lewa =json_decode($lewa,true);

  $new_dolar_dolar = (double)$new_dolar['rates']['0']['mid'];
  $new_lek_lek = (double)$new_lek['rates']['0']['mid'];
  $new_euro_euro = (double) $new_euro['rates']['0']['mid'];
  $new_kun_kun = (double)$new_kun['rates']['0']['mid'];
  $new_lewa_lewa = (double)$new_lewa['rates']['0']['mid'];


        return view ('data', ['new_dolar_dolar' => $new_dolar_dolar,
                           'new_lek_lek'=> $new_lek_lek,
                           'new_euro_euro' => $new_euro_euro,       
                            'new_kun_kun'=>$new_kun_kun,
                          'new_lewa_lewa'=>$new_lewa_lewa,
                            ]); 
    }
   
    function switcher()
    {
        




    }


}
