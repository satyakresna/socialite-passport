<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Socialite and Passport Together</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div style="display: flex; flex-direction: column; align-items: center;">
            <h1>Socialite and Passport Together</h1>
            <p>
                Let user login using social media like Google, Facebook, Twitter, etc. After they login,
                system will generate a access token using Laravel Passport.
                In this page, I just use Google as example.
                Get <strong>token</strong> from Google sign in after click the link below
                and then go to Laravel route api login.
            </p>
            <a href="/login/google">Login with Google</a>
        </div>
    </body>
</html>
