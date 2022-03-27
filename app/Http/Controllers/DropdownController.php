<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{
    public function view()
    {
        $generation = DB::table('generation')
            ->get();
        
        return view('dropdown', compact('generation'));
    }
}
