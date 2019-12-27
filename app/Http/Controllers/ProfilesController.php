<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hekmatinasser\Verta\Verta;
class ProfilesController extends Controller
{
    
    public function show($user)
    {
         $user = User::findOrFail($user);
        return view('profiles.show' , compact ('user'));
    }
}
