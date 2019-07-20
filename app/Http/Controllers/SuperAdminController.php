<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();


class SuperAdminController extends Controller
{
    public function logout()
    {
        Session::flush();
        return redirect('/admin');
    }
}
