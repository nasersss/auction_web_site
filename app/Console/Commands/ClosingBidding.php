<?php

namespace App\Console\Commands;

use App\Models\Bidding;
use Illuminate\Console\Command;

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
        $auction = new AuctionController();
        $auciton->checkAucationDate();
        $this->info('Successfully.');
    }
}
