<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use dataTable;
use Yajra\DataTables\DataTables;

class yajraController extends Controller
{
    public function index(){
        return view('user');
    }

    public function getData(Request $request){
        if ($request->ajax()) {
            $data = User::select(['id', 'name', 'email']);
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
