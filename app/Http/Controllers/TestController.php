<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('post')->get();
        return view('db', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'date' => $request->date,
        ];
        DB::table('post')->insert($param);
        return redirect('/');
    }
}