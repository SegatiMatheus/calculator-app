<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterService
{
    public function __construct()
    {
    }

    public function register(Request $request): JsonResponse | RedirectResponse
    {
        try {
            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'nome'  => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'Senha' => 'required|string|min:8',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            $user = User::create([
                'id'       => (string) Str::uuid(),
                'name'     => $request->nome,
                'email'    => $request->email,
                'password' => bcrypt($request->senha),
            ]);

            if (!$user) {
                DB::rollBack();
                return response()->json(['error' => 'Falha ao registrar o usuário.'], 500);
            }

            Auth::loginUsingId($user->id, true);

            DB::commit();
            return response()->json([
                'success'  => 'Usuário registrado com sucesso!.',
                'redirect' => route('home'),
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
