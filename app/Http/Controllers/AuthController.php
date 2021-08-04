<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return 
        [
            "NIS" => 3103119067,
            "Nama" => 'Failan Rahysya Izzul pratama',
            "Gender" => 'Laki-laki',
            "Phone" => 6289541177520,
            "Class" => 'XII RPL 2'

        ];
    }  
} 
