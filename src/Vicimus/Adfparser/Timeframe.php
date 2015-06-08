<?php

namespace Vicimus\Adfparser;

class Timeframe
{
	public $description;
	public $earliestdate;
	public $latestdate;

	public function __construct(\SimpleXMLElement $object = null)
	{
		$this->description = (string)$object->description;
		$this->earliestdate = (string)$object->earliestdate;
		$this->latestdate = (string)$object->latestdate;
	}
}