<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function search(Request $request){
        $search = $request->only('search');
        return response()->json($search);
    }
}
