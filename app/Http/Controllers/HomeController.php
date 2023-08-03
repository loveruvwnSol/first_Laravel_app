<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $threads = \Auth::user()->threads()->orderBy('created_at', 'desc')->get();
        $data = [
            'thread' => $threads,
        ];
        return view('threads.index', $data);
    }
}