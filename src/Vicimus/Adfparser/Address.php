<?php

namespace Vicimus\Adfparser;

class Address
{
	public $type;
	public $street;
	public $apartment;
	public $city;
	public $region;
	public $postal;
	public $country;

	public function __construct(\SimpleXMLElement $object = null)
	{
		if(!is_null($object))
		{
			$this->type = (string)$object['type'];
			$this->street = array();

			if(is_array($object->street))
			{
				foreach($object->street as $street)
					$this->street[] = (string)$street;
			}
			else
			{
				$this->street[] = (string)$object->street;
			}

			$this->apartment = (string)$object->apartment;
			$this->city = (string)$object->city;
			$this->region = (string)$object->region;
			$this->postal = (string)$object->postalcode;
			$this->country = (string)$object->country;

		}
	}
}