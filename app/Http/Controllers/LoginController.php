<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    protected LoginService $service;
    public function __construct()
    {
        $this->service = new LoginService();
    }

    public function login(Request $request)
    {
        return $this->service->login($request->user, $request->password);
    }
}
