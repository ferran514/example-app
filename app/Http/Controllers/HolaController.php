<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function saludo(string $name): string {
        return view("saludo",compact("name"));
    }
}
