<?php

namespace App\Http\Controllers;

use App\Services\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected ?RegisterService $service;

    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            return $this->service->register($request);
        }

        return abort(404);
    }
}
