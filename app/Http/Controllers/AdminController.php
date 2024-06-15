<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function Login(Request $request)
    {
        $admin = admin::where('Nom','=',$request->Nom)->first();
        if (!$admin) {
            return redirect('/')->with('erreur', 'Nom ou mot de passe invalide');
        }

        if ($request->password == $admin->password) {
            SESSION::put('id', $admin->id);
            return redirect('/welcome');
        } else{
            return redirect('/')->with('erreur', 'Nom ou mot de passe invalide');
        } 
    }

    public function logout()
    {
        Session::forget('id');
        return redirect('/')->with('logout', 'Deconnexion avec succées.');
    }
}
