<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index () {
        // $view = $this->$tool();
        // return view($view);
    }

    public function filter() {
        return view('tool/filter');
        // return 'tool/filter';
    }

    public function distance() {
        return view('tool/distance');
        // return 'tool/distance';
    }
}
