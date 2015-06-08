<?php

namespace Vicimus\Adfparser;

class Customer
{
	public $contact;
	public $timeframe;
	public $comments;

	public function __construct(\SimpleXMLElement $object = null)
	{
		$this->contact = new Contact($object->contact);
		$this->comments = (string)$object->comments;
		$this->timeframe = new Timeframe($object->timeframe);
	}
}