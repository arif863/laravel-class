<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

  public function index()
  	{
  		$users = User::all();

  		return $users;
   	}

  public function create()
  	{

  	  return view('create-user');

 	}


  public function show($id, $email='arifmahamud863@gmail.com')
  	{
  	 return $id . ' '.$email;
  	}


  public function display($id)
  {
  	return 'display' . $id;
  }



  public function store()
  	{
  		
  		return'add a user';
 	}

  public function update()
  	{
  		return 'updated';
  	}
  public function updateusername()
  	{
  		return'name has been updated';
  	}

  public function delete()
  	{
  		return'deleted';
  	}				
}