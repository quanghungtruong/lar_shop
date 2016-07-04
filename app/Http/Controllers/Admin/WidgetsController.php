<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers;

class WidgetsController extends Controller
{
    public function getIndex(){
        return view('admin.widgets');
    }

}
