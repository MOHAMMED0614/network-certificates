<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Certificates;    // استيراد الموديل
use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $certificates = Certificates::all();
            $today = Carbon::today();

            foreach ($certificates as $certificate) {
                $endDate = Carbon::parse($certificate->support_end_date)->startOfDay();

                if ($endDate->lt($today)) {
                    $certificate->status = 'Expired';
                } elseif ($endDate->between($today, $today->copy()->addDays(3))) {
                    $certificate->status = 'Expiring Soon';
                } else {
                    $certificate->status = 'Active';
                }

                $certificate->save();
                \Log::info('Scheduler is running...');

                \Log::info("Certificate #{$certificate->id}: end date = {$endDate->toDateString()}, status set to {$certificate->status}");
            }
        })->everyMinute();
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
