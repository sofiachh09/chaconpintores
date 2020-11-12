<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    //
    public function  welcome(){
        return redirect()->action('controlador@login');

    }
    public function inicio ()
    {
        return view('admon.dashboard');
    }

    public function pintor1 ()
    {
        return view('pintor1');
    }

    public function pintor2()
    {
    return view('pintor2');}

    public function pintor3()
    {
        return view('pintor3');
    }
    public function pintor4()
    {
        return view('pintor4');
    }
    public function validar(Request $request)
    {
        $user=$request->input('sofi');
        $pass=$request->input('123');
        
        if ($user==='sof'){$url='admon.deshboard';}
        else{$url='admon.login';}

        return view('admon.deshboard',['user'=>$request->input('user')]);
    }
    public function login()
    {
        return view('admon.login');
    }

}
