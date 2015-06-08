<?php

namespace Vicimus\Adfparser;

class Phone
{
	public $type;
	public $time;
	public $number;
	public $preferred;

	public function __construct(\SimpleXMLElement $object = null)
	{
		if(!is_null($object))
		{
			$this->type = (string)$object['type'];
			$this->time = (string)$object['time'];
			$this->number = (string)$object;
			$this->preferred = (bool)$object['preferredcontact'];
		}

	}
}