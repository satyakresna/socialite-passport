# Socialite and Passport Together

Example repo using Socialite to get token from provider and the pass it to Passport to generate access token.
You must be familiar with Laravel, Socialite and Passport.

## Usage

1. Get Google credentials in this site: https://console.developers.google.com/apis/credentials
2. Choose OAuth2 client ID
3. Get client id and client secret, set callback. After that put them in `.env` file. `GOOGLE_CLIENT_ID` for client id, `GOOGLE_CLIENT_SECRET` for client secret and `GOOGLE_CALLBACK` for callback.
4. Generate password grant type in Laravel passport using `php artisan passport:client --password
5. Copy password client id and client secret and put them in `.env` file. `PASSWORD_GRANT_CLIENT_ID` for client id, `PASSWORD_GRANT_CLIENT_SECRET` for client secret.
6. Do migration
7. Run using `php artisan serve`

## Tips

Explore web and api route. You will understand how it works.

## Note

The `access_token` comes from `Socialite::driver('google')->stateless()->user()->token` and pass it to the AuthController login API.

## Resource

I learn this concept from Orobo Lucky's article: [Laravel API Authentication for Social Networks — OAuth2 Social Grant](https://itnext.io/laravel-api-authentication-for-social-networks-oauth2-social-grant-3ec1085b58b6). You should read.
