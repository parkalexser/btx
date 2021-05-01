<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
        $details = [
            'title' => 'Title',
            'body' => 'Text'
        ];

        \Mail::to('parkalexser@gmail.com')->send(new \App\Mail\MyMail($details));

        return 'Сообщение отправлено на адрес';

    }
}
