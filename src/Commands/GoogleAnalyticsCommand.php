<?php

namespace VitorBizarra\GoogleAnalytics\Commands;

use Illuminate\Console\Command;

class GoogleAnalyticsCommand extends Command
{
    public $signature = 'laravel-google-analytics';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
