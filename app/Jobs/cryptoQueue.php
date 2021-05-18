<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class cryptoQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $quoinex  = new \ccxt\binance()   ;
        $atom=$quoinex->fetch_ticker ('ATOM/USDT');
        $btc=$quoinex->fetch_ticker ('BTC/USDT');
        \ticketHelper::storeTickets($atom);
        \ticketHelper::storeTickets($btc);

    }
}
