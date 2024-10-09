<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     * 
     * __invoke => Significa que não irá existir nenhum outro método dentro desta classe, é de uma função unica.
     */
    public function __invoke(Request $request)
    {

        //$user = User::query()->find(1);

        //dd($user);

        return view('welcome');
    }
}
