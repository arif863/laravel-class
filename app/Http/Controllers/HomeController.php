<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
	public function index()
	{

		$this->data['name'] = 'Arif hossain';
		$this->data['roll'] = 12;
		$this->data['post'] = "hello World";

		$this->data['subject'] = ['Bangla','English','math'];

		return view('home.index',$this->data);
	}
	
}