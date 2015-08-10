<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/', function() {
    $data = [
        'name' => 'felixkiss',
        'email' => 'felixkiss@users.github.com',
        'password' => 'foo',
    ];
    $rules = [
        'name' => 'required|unique_with:users,email',
        'email' => 'required',
    ];
    $validator = Validator::make($data, $rules);

    if ($validator->fails())
    {
        dd($validator->errors());
    }

    $user = App\User::create($data);
    dd($user);
});
