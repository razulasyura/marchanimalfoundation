<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coffe;

class CoffeController extends Controller
{
    public function index()
    {
        $data = New Coffe();
        $user = $data->all();
        dd($user);

    }
}
