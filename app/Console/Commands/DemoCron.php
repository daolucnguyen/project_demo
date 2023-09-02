<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendMail as MailSendMail;
use Illuminate\Support\Facades\Mail;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send mail';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('luc.nguyendao@amela.vn')->send(new MailSendMail());
    }
}
