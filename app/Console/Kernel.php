<?php

namespace App\Console;

use App\Models\Bidding;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('closing:bidding')->everyMinute();
        // $schedule->call(function () {
            // $badd = new Bidding();
            // $badd->user_id = 100;
            // $badd->auction_id = 12;
            // $badd->bidding_amount = 1250;
            // $badd->payed_amount = 1254;
            // $badd->save();
            // dispatch(new Bidd);
        // })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
