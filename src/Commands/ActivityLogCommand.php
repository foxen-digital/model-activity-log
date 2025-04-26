<?php

namespace Foxen\ActivityLog\Commands;

use Illuminate\Console\Command;

class ActivityLogCommand extends Command
{
    public $signature = 'model-activity-log';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
