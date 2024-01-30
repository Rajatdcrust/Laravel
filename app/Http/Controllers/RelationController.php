<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Member;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    //
    function index()
    {     
        return Member ::with('getGroup')->get();
    }
    function group()
    {     
        p( Group ::with('member')->get()->toArray());
    }
}
