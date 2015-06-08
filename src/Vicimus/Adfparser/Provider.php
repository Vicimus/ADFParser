<?php

namespace Vicimus\Adfparser;

class Provider
{
	public $name;
	public $service;
	public $url;
	public $email;
	public $phone;

	public function __construct(\SimpleXMLElement $object = null)
	{
		if(!is_null($object))
		{
			$this->name = (string)$object->name;
			$this->service = (string)$object->service;
			$this->url = (string)$object->url;
			$this->email = (string)$object->email;
			$this->phone = (string)$object->phone;
			$this->contact = new Contact($object->contact);
		}
	}


}