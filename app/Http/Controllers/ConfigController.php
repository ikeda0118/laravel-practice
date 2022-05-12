<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{

    //コンストラクタで設定情報を書き換え
    function __construct()
    {
        config(['sample.message' => '設定情報書き換え']);
    }

    public function index() {
        $sample_msg = config('sample.message');
        $sample_data =config('sample.data');

        $data = [
            'msg'=> $sample_msg,
            'data'=> $sample_data
        ];
        return view('configtest.index', $data);
    }
}
