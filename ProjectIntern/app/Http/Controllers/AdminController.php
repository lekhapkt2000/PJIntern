<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
}
