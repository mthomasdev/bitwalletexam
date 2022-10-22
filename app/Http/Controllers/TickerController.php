<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Symbol;
use App\Models\Ticker;

class TickerController extends Controller
{
    //

    public function getBinanceTickerPriceBySymbol(Request $request)
    {
        $symbol = $request->symbol;

        return Ticker::getBinancePrice($symbol);
    }


    public function getBittrexTickerPriceBySymbol(Request $request)
    {
        $symbol = $request->symbol;

        return Ticker::getBittrexPrice($symbol);
    }

    public function getBestPrice(Request $request)
    {
        $symbol = $request->symbol;
        $bestprice = Ticker::getBestPrice($symbol);
        return $bestprice[0];
    }
}
