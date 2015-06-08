<?php

namespace Vicimus\Adfparser;

class Vendor
{
	public $name;

	public function __construct(\SimpleXMLElement $object = null)
	{
		if(!is_null($object))
		{
			$this->name = (string)$object->contact->name;
		}
	}
}