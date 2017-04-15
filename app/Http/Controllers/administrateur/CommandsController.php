<?php

namespace App\Http\Controllers\administrateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommandsController extends Controller
{
    public function index(){

        return view('administrateur.commands.index');

    }
}
