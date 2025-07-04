<?php

namespace App\Http\Controllers;
use app\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalUsuario=User::count();
        return view('admin.index', compact('totalUsuario'));
    }
}
