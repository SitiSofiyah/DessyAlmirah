<?php namespace Briliantmax\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return[
    		'Briliantmax\Contact\Components\ContactForm' => 'contactform',
    	];
    }

    public function registerSettings()
    {
    }
}
