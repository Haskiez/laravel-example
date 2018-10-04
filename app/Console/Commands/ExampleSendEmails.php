<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendEmail;

class ExampleSendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example:sendemails {--email=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This example command will send a basic email to the address you provide as an argument.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Send the email option to this job
        dispatch(new SendEmail($this->option('email')));
    }
}
