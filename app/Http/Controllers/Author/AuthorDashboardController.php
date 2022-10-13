<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorDashboardController extends Controller
{
    //
    public function authorindex(){
        return view('author.index');
}
}
