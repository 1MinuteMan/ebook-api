<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis' => 3103120144,
            'nama' => 'Fakhri Hauzan',
            'phone' => '08533102057',
            'kelas' => 'xii rpl 5'
        ];
    }
}
