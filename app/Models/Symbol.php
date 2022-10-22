<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symbol extends Model
{
    use HasFactory;


    /**
     * Get Binance Symbol
     *
     * @param  $symbol,
     *
     * @return string
     */
    public static function getBinanceSymbol($symbol)
    {
        $result = Symbol::select('binance')
                            ->where('symbol', $symbol)
                            ->where('is_active', true)
                            ->first();

        return $result;
    }

    /**
     * Get Bittrex Symbol
     *
     * @param  $symbol,
     *
     * @return string
     */
    public static function getBittrexSymbol($symbol)
    {
        $result = Symbol::select('bittrex')
                            ->where('symbol', $symbol)
                            ->where('is_active', true)
                            ->first();

        return $result;
    }
}
