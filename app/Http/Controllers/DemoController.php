<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        return View('index');
    }
    public function about()
    {
        return View('about');
    }
}
