<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginService
{
    public function getUser($user, $password)
    {
        $user = User::query()
            ->where('email', '=', $user)
            ->whereNotNull('password')
            ->first();

        if ($user && Hash::check($password, $user->password)) {
            return $user;
        }

        return null;
    }

    public function loadSessionWeb(User $user)
    {
        Session::put("user_id", $user->id);
        Session::put('user_name', $user->name);
    }

    public function login($request)
    {
        $user = $this->getUser($request->user, $request->password);
        if (!$user) {return null;}

        Auth::loginUsingId($user->id, true);
        $this->loadSessionWeb($user);

        return $user;
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('index');
    }
}
