<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    protected ?LoginService $service;

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            return $this->service->login($request);
        }

        return abort(404);
    }
}
