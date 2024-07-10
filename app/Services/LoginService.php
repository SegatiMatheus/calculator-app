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

    public function login($user, $password)
    {
        $user = $this->getUser($user, $password);
        if (!$user) {
            return response()->json(['error' => 'Usuário ou senha inválidos.'], 401);
        }

        Auth::loginUsingId($user->id, true);
        $this->loadSessionWeb($user);

        return response()->json([
            'success'  => 'Logado com sucesso!.',
            'redirect' => route('home'),
        ], 200);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
    }
}
