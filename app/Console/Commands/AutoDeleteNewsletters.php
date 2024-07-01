<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Newsletter;
use Carbon\Carbon;

class AutoDeleteNewsletters extends Command
{
    protected $signature = 'newsletters:auto-delete';
    protected $description = 'Auto delete newsletters after 2 minutes';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $timeLimit = Carbon::now()->subMinutes(2);
        Newsletter::where('created_at', '<=', $timeLimit)->delete();
        $this->info('Newsletters auto-deleted successfully.');
    }
}

