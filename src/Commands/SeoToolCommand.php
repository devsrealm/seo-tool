<?php

namespace Devsrealm\SeoTool\Commands;

use Illuminate\Console\Command;

class SeoToolCommand extends Command
{
    public $signature = 'seo_tool';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
