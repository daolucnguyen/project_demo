<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthenticationService;
use App\Jobs\SendMail as JobsSendMail;
use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class AuthenticationController extends Controller
{

    protected $authenticationService;

    public function __construct(AuthenticationService $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    public function login(Request $request)
    {
        
        $redis = Redis::connection();
        echo $redis->get('name');
    //     $job = (new JobsSendMail([], []));
    //     dispatch($job);
    //     $mailData = [
    //         'title' => 'Mail from',
    //         'body' => 'This is for testing email using smtp.'
    //     ];
	// Mail::to('luc.nguyendao@amela.vn')->send(new SendMail($mailData));

        // if (Mail::to('luc.nguyendao@amela.vn')->send(new SendMail($mailData))) {
        //     echo "Great! Successfully send in your mail";
        // } else {
        //     echo "Sorry! Please try again latter";
        // }
    }
}
