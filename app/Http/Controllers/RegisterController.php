<?php

namespace App\Http\Controllers;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
        ]);
        

        $user = User::create($attributes);
        auth()->login($user);
        //$user->roles()->attach([$attributes]);
        //$user->addRole($attributes);
        //$user->syncRoles([$user->id]);
        
        return redirect('/dashboard');
    } 
}
