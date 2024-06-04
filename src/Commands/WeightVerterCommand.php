<?php

namespace Raihan\WeightVerter\Commands;

use Illuminate\Console\Command;

class WeightVerterCommand extends Command
{
    public $signature = 'weight-verter';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
