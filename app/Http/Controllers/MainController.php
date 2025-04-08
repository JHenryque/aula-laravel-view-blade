<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{

    public function showView(): View
    {
        //1 metodo
        $data = [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
        ];
        return view('admin.admin_cont', $data);
        /*// 2 metodo
        return view('admin.admin_cont', [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
        ]);
        // 3 METODO
        //return view('admin.admin_cont',)->with('name', 'Henrique')->with('email','henrique@henrique.com');
        // 4 metodo
        $name = 'Jose Henrique';
        $email = 'josehenrique@gmail.com';
        return view('admin.admin_cont',compact('name', 'email' ));*/
    }

    public function homeValue(): View
    {
        return view('home', ['value' => true]);
    }

    public function estruturaRepiticao(): View
    {
        $data = [
            'value' => 1,
            'cities' => ['Garanhuns', 'Recife', 'Maceio'],
            'names' => [],
            'indice' => 1,
        ];
        return view('estruturaRepiticao', $data);
    }

    public  function csrfinput(): View
    {
        return view('csrfMetedo');
    }

    public function submitform(Request $request): string
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:20',
        ],
        [
            'username.required' => 'Campo Username obrigatorio',
            'password.required' => 'Campo Password obrigatorio',
            'password.min' => 'Campo Password deve ter mais de :min caracteres',
            'password.max' => 'Campo Password deve ter mais de :max caracteres',
        ]
        );

        return "submetido Formulario";
    }

    public function setSession(): View
    {
        session(['username' => 'John Doe']);
        return view('welcome');
    }

    public function clearSession(): string
    {
        session()->forget('username');
        return view('welcome');
    }
}
