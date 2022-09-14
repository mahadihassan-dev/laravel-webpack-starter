<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Index Page
    public function index(){
        echo('Hello Admin');
    }
}
