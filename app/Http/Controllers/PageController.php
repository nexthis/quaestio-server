<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Change;

class PageController extends Controller
{
    function index(){
        $changes = Change::paginate(3);
        return response()->json($changes);;
    }
}
