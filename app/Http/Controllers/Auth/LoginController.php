<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Exceptions\InvalidAuthenticationException;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $input = $request->validated();

        if(!Auth::attempt($input)) {
            throw new InvalidAuthenticationException();
        }

        $request->session()->regenerate();



        return new UserResource(auth()->user());
    }
}
