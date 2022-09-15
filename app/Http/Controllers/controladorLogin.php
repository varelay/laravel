<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class controladorLogin extends Controller
{
    public function index(){
        return view('index');
    }

    public function registro(Request $request){

        $request->validate([
            'name' => 'required|max:50',
            'email' => 'email',
            'password' => 'required|max:50',
        ]);

        $user = new user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        alert()->success('Usuario nuevo','Bienvenido/a '.$user->name.' Ya estás dado de alta');

        return redirect()->route('login');
        }

}
