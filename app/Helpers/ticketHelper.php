<?php


use App\Models\cryptoTicket;

class ticketHelper
{
    public static function storeTickets($atom)
    {
//        $hasEntry = cryptoTicket::where('symbol', $atom['info']['symbol'])->first();
//        if (!$hasEntry) {
        $hasEntry = new cryptoTicket();
//        }
        $hasEntry->symbol = $atom['info']['symbol'];
        $hasEntry->priceChange = $atom['info']['priceChange'];
        $hasEntry->lastPrice = $atom['info']['lastPrice'];
        $hasEntry->lastQty = $atom['info']['lastQty'];
        $hasEntry->bidPrice = $atom['info']['bidPrice'];
        $hasEntry->bidQty = $atom['info']['bidQty'];
        $hasEntry->openPrice = $atom['info']['openPrice'];
        $hasEntry->highPrice = $atom['info']['highPrice'];
        $hasEntry->lowPrice = $atom['info']['lowPrice'];
        $hasEntry->volume = $atom['info']['volume'];
        $hasEntry->quoteVolume = $atom['info']['quoteVolume'];
        $hasEntry->save();


    }


}
