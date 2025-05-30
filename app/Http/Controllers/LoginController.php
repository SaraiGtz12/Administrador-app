<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function LogIn(Request $request){
        Log::info("los datos llegaron");
        $request->validate([
            'UserEmailTxt' => 'required|email',
            'UserPasswordTxt' => 'required|string'
        ]);

        if($usuario = User::where('EmailUser', $request->input('UserEmailTxt'))->first()){
            Log::info("correo");
            if(Hash::check($request->input('UserPasswordTxt'), $usuario->Password)){
                Auth::login($usuario);
                $request->session()->regenerate();

                if($usuario->RolId == 1){
                    return redirect()->intentend('Dashboard.Home');
                }
            }else{
                Log::info("No coincide");
                return redirect()->back()->withErrors(['LoginError'=>'Correo o Contraseña Incorrecta']);
            }
        }else{
            return redirect()->back()->withErrors(['LoginError'=>'Correo o Contraseña Incorrecta']);
        }
    }

    public function LogOut(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->to('/');
    }
}
