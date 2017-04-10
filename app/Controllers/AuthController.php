<?php

namespace App\Controllers;

use Firebase\JWT\JWT;

class AuthController extends Controller{

 public function index($request,$response){
    $key = "keyofslimstarterkit";

    $token = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => 1356999524,
    "nbf" => 1357000000
     );
     $jwt = JWT::encode($token, $key);

     return $jwt;
 }
}
