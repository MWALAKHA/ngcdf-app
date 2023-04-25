<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //delete user
    public function delete($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('/user-management')->with('success', 'User has been deleted.');
}

}
