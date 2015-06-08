<?php

namespace Vicimus\Adfparser;

class Contact
{

	public $name;
	public $email;
	public $phone;
	public $address;
	public $isPrimary = false;

	public function __construct(\SimpleXMLElement $object = null)
	{
		if(!is_null($object))
		{
			$this->isPrimary = (bool)$object['primarycontact'];
			$this->name = (string)$object->name;
			$this->email = (string)$object->email;
			$this->phone = array();
			if(is_array($object->phone))
			{
				foreach($object->phone as $phone)
					$this->phone[] = new Phone($phone);
			}
			else
			{
				$this->phone[] = new Phone($object->phone);
			}

			$this->address = new Address($object->address);
		}
	}
}