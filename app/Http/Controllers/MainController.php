<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{

    public function showView(): View
    {
        //1 metodo
        /*$data = [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
        ];
        return view('admin.admin_cont', $data);*/
        // 2 metodo
        /*return view('admin.admin_cont', [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
        ]);*/
        // 3 METODO
        //return view('admin.admin_cont',)->with('name', 'Henrique')->with('email','henrique@henrique.com');
        // 4 metodo
        $name = 'Jose Henrique';
        $email = 'josehenrique@gmail.com';
        return view('admin.admin_cont',compact('name', 'email' ));
    }
}
