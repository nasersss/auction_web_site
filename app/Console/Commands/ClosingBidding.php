<?php

namespace App\Console\Commands;

use App\Mail\Notification;
use App\Models\Bidding;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ClosingBidding extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'closing:bidding';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command we will manage all things that well done before it';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $badd = new Bidding();
        // $badd->user_id = 1;
        // $badd->auction_id = 1;
        // $badd->bidding_amount = 1250;
        // $badd->payed_amount = 1254;
        // $badd->save();
        // $this->info('Successfully.');
        // Mail::to('amas701111367@gmail.com')->send(new Notification());
    }
}
