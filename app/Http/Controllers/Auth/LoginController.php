<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function redirectTo()
    {
        $role = Auth::user()->role;

        if ($role === 'admin') {
            return '/admin/dashboard';
        }

        return '/dashboard';
    }

    public function authenticated(Request $request, $user)
    {
        return redirect($this->redirectTo());
    }
}
