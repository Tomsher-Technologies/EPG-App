<?php

namespace App\Http\Controllers\Member\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberAuthController extends Controller
{
    public function loginView()
    {
        return view('members.auth.login');
    }

    public function loginAuth(AuthRequest $request)
    {
        $user = User::whereStatus(true)->where('email', $request->email)->first();
        if (
            $user &&
            $user->isA('member') &&
            Hash::check($request->password, $user->password)
        ) {
            Auth::login($user);
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
