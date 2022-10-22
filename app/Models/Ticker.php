<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Symbol;
use App\Services\BinanceService;
use App\Services\BittrexService;

class Ticker extends Model
{
    use HasFactory;

    /**
     * Get Bittrex Price
     *
     * @param  $symbol,
     *
     * @return string
     */

    public static function getBittrexPrice($symbol)
    {
        $providerSymbol = Symbol::getBittrexSymbol($symbol);

        $ticker = new BittrexService();
        $result = $ticker->getTickerPrice($providerSymbol['bittrex']);

        return [
            'provider'  => 'bittrex',
            'symbol'    => $symbol,
            'price'     => $result->askRate
        ];
    }

    /**
     * Get Binance Price
     *
     * @param  $symbol,
     *
     * @return string
     */

    public static function getBinancePrice($symbol)
    {
        $providerSymbol = Symbol::getBinanceSymbol($symbol);

        $ticker = new BinanceService();
        $result = $ticker->getTickerPrice($providerSymbol['binance']);
        
        return [
            'provider'  => 'binance',
            'symbol'    => $symbol,
            'price'     => $result->price
        ];
    }


    /**
     * Get getBestPrice
     *
     * @param  $symbol,
     *
     * @return string
     */

    public static function getBestPrice($symbol)
    {
        $binance = Ticker::getBinancePrice($symbol);
        $bittrex = Ticker::getBittrexPrice($symbol);
       
        sleep(2);
        $result = [];
        array_push($result, $binance);
        array_push($result, $bittrex);
        rsort($result);
        return $result;
    }
}
