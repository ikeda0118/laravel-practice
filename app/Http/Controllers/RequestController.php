<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index() {
        $sample_msg = config('sample.message');
        $sample_data =config('sample.data');

        $data = [
            'msg'=> $sample_msg,
            'data'=> $sample_data
        ];
        return view('hello.index', $data);
    }
}
