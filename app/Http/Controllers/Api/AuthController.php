<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $form = [
            'grant_type' => $request->grant_type,
            'client_id' => config('services.passport.client_id'),
            'client_secret' => config('services.passport.client_secret'),
            'provider' => $request->provider,
            'access_token' => $request->access_token,
        ];

        $request->request->add($form);

        $requestToken = Request::create('oauth/token', 'POST');
        $response = Route::dispatch($requestToken);

        return json_decode((string) $response->content(), true);
    }
}
