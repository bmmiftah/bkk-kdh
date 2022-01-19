<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class KirimEmailController extends Controller
{
    public function kirim()
    {
        $email = 'raadiputra.dev@gmail.com';
        $data = [
            'title' => 'Selamat Datang!',
            'url' => 'https://bkk-kdh.test',
        ];
        Mail::to($email)->send(new SendMail($data));
        return 'Berhasil mengirim email!';
    }
}
