<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;
use App\Validation\Confirmation;

class HomeController extends Controller{

  public function index($request, $response){

     $validation = $this->validator->validate($request,[
         'email'=>v::noWhitespace()->notEmpty()->emailAvailable(),
         'name'=>v::noWhitespace()->notEmpty()
     ]);
     
     if($validation->failed()){
      return  $response->withJson(new Confirmation("error","something wrong","nothing"));
     }else{
      return $response->withJson(User::all());
     }
  }
}
