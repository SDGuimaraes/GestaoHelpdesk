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
        $connect = imap_open('{imap.uni5.net:993/imap/ssl}INBOX', 'herick.guimares@lpbc.com.br', 'herick2021',OP_HALFOPEN)
            or die("Não conectado " . imap_last_error());


        $list = imap_list($connect, "{imap.uni5.net:993/imap/ssl}", "*.Sent");
        if (is_array($list)) {
            foreach ($list as $val) {
                echo imap_utf7_decode($val) . "<br>";
            }
        } else {
            echo "imap list falhou " . imap_last_error() . "\n";
        }

        $inbox = imap_search($connect,'ALL');

        
        imap_close($connect);

        return view("email.entrada", [
            'list' => $list,
            'inbox' => $inbox,
        ]);
    }
}
