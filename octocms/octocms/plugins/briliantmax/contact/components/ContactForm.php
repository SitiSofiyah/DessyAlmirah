<?php namespace Briliantmax\Contact\Components;

use Cms\Classes\ComponentBase;
use Mail;
use Input;

class ContactForm extends ComponentBase
{
	public function componentDetails(){
		return[
			'name' => 'Contact Form',
			'description' => 'Simple contact form'
		];
	}

	public function onSend(){

		$vars = ['name' => Input::get('name'),'email'=> Input::get('email'), 'content'=>Input::get('content')];

		Mail::send('briliantmax.contact::mail::message',$vars,function($message){
			$message->to('sitisofia05@gmail.com','Admin Person');
			$message->subject('New Message from contact form');
		});
	}
}

