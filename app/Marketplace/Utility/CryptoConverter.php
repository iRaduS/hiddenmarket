<?php


namespace App\Marketplace\Utility;
use Illuminate\Support\Facades\Cache;


class CryptoConverter
{

 /**
     * Converting from one Symbol to another in amount
     *
     * @param float $amount
     * @return float
     */
    public static function ethToUsd(float $amount)
    {
        $currencyPrice = Cache::remember('eth_price', config('coins.caching_price_interval'),function(){
            $url = "https://www.bitstamp.net/api/v2/ticker/ethusd";
            $json = json_decode(file_get_contents($url), true);
            $currency_price = $json["last"];

            return $currency_price;
        });
           
        
        // calculate crypto and store
        return number_format($amount * $currencyPrice, 2);
    }

    public static function bchToUsd(float $amount)
    {
        $currencyPrice = Cache::remember('bch_price', config('coins.caching_price_interval'),function(){
            $url = "https://www.bitstamp.net/api/v2/ticker/bchusd";
            $json = json_decode(file_get_contents($url), true);
            $currency_price = $json["last"];

            return $currency_price;
        });
           
        
        // calculate crypto and store
        return number_format($amount * $currencyPrice, 2);
    }

    public static function ltcToUsd(float $amount)
    {
        $currencyPrice = Cache::remember('ltc_price', config('coins.caching_price_interval'),function(){
            $url = "https://www.bitstamp.net/api/v2/ticker/ltcusd";
            $json = json_decode(file_get_contents($url), true);
            $currency_price = $json["last"];

            return $currency_price;
        });
           
        
        // calculate crypto and store
        return number_format($amount * $currencyPrice, 2);
    }
}
