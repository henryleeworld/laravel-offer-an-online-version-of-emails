<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Sammyjo20\Wagonwheel\Models\OnlineMailable;

class WelcomeController extends Controller
{
    /**
     * Send a mail.
     *
     * @return Response
     */
    public function sendMail()
    {
        $to = [
            [
                'email' => 'henryleeworld@gmail.com', 
                'name'  => '李亨利',
            ]
        ];
        Mail::to($to)->send(new Welcome());
        echo URL::signedRoute('mail.view-online', ['onlineMailable' => OnlineMailable::latest()->first()->uuid]) . PHP_EOL;
    }
}
