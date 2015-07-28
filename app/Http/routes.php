<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Mail;

$app->get('/', function () {
//    return $app->welcome();
    Mail::raw('Raw string email', function($msg) { $msg->to(['thomasjohnkane@gmail.com']); $msg->from(['x@x.com']); });

    return 'logged email via mailtrap.io...';

});

//Temporary route to generate key for .env file
$app->get('/key', function() {
    return str_random(32);
});
