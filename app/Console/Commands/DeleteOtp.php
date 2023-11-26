<?php

namespace App\Console\Commands;

use App\Models\verify;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;


class DeleteOtp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verify:delete-otp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verification Otp Delete';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $current_time = Carbon::now()->format('H:i:s');
        // $all_otp = verify::all();

        // foreach($all_otp as $otp){
        //     $verify_time = Carbon::parse($otp->created_at);
        //     $time = $verify_time->diffInHours($current_time);
        //     if($time > 0){
        //         verify::where('id', $otp->id)->delete();
        //     }
        //     \Log::info($time);

        // }
    }
}
