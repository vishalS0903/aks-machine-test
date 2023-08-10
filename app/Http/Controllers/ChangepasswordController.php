<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class ChangepasswordController extends Controller
{
    public function changepassword(Request $request, $id)
    {
        $user= Auth::user();
        $usernew = User::find($user->$id);
        $usernew -> password = bcrypt( $request-> password);
        $usernew -> save();
        return redirect()->back();

    }
}
