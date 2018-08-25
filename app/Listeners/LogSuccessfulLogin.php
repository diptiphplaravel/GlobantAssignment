<?php

namespace App\Listeners;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\CommonActivityController;
class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
    	$this->request = $request;
    	$this->commonActivityObject=new CommonActivityController();
    	$this->commonActivityObject->Log_Records('User_Login',json_encode($request->except(['_token'])),$request);
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
    	$user = $event->user;
    	$user->last_login_at = date('Y-m-d H:i:s');
    	$user->last_login_ip = $this->request->ip();
    	$user->save();
    }
}
