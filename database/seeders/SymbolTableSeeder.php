<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Symbol;

class SymbolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symbol::create([
            'symbol' => 'LTCBTC',
            'binance' => 'LTCBTC',
            'bittrex' => 'LTC-BTC',
            'is_active' => true,
        ]);
    }
}
