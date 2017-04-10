<?php

namespace App\Controllers;

use Firebase\JWT\JWT;

class AuthController extends Controller{

 public function index($request,$response){
    $key = "keyofslimstarterkit";

    $token = [
        "alg"=> "HS256",
        "iss" => "http://example.org", //The issuer of the token
        "aud" => "http://example.com", //The audience of the token
        "iat" => 1356999524,
        "nbf" => 1357000000,
        "typ"=> "JWT",
        "payload"=> [

            "sub"=> "1234567890",
            "name"=> "John Doe",
            "admin"=> true

        ]
     ];
     $jwt = JWT::encode($token, $key);

     return $jwt;
 }
}
