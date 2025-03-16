<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class productController extends Controller
{
    public function index(){
        return view('products');
    }

    public function view_data(){
        $user = new UserService;

        $name = $user->get_all_data();
        return $name;
    }
}
