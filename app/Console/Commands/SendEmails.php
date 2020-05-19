<?php

namespace App\Console\Commands;

use App\Mail\Launch;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:launch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Launch Notification to Users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $users = (new User)->where('suspended', false)->get();
        echo "Sending Launch Email to Subscribed Users . . .\n";
        return Mail::to($users)->send(new Launch());
    }
}
