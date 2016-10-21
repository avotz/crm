<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Mailers\ContactMailer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ContactMailer $mailer)
    {
        $this->middleware('auth');
        $this->mailer = $mailer;
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $task = \App\Task::find(1)->first();

        $this->mailer->notificationTasks(['task'=> $task]);
        
        return 'send';
    }
}
