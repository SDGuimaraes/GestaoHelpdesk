<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        /*$username = env('MAIL_USERNAME');
        $password = env('MAIL_PASSWORD');

        // create Imap_parser Object
        $email = new Email();

        $inbox = null;


        if ($email->connect(
            '{imap.gmail.com:993/ssl}INBOX',
            'ttesteimap@gmail.com',
            'T3st@123'
        )) {
            $inbox = $email->getMessages('html');
        }*/

        return view('email.entrada');
    }
}
