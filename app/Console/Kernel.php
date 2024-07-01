<?php


protected function schedule(Schedule $schedule)
{
    $schedule->command('newsletters:auto-delete')->everyMinute();
}
