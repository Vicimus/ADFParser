<?php

namespace Vicimus\Adfparser;

class ADFParser
{
	public $date;
	public $vehicle;
	public $first;
	public $last;
	public $email;
	public $phone;
	public $vendor;

	public static function parseString($xml)
	{
		$xml = simplexml_load_string($xml);
		
		$adf = new ADFParser();

		$adf->date = (string)$xml->prospect->requestdate;

		$vehicle = (string)$xml->prospect->vehicle->year;
		$vehicle .= ' '.(string)$xml->prospect->vehicle->make;
		$vehicle .= ' '.(string)$xml->prospect->vehicle->model;

		$adf->vehicle = $vehicle;
		
		$adf->first = (string)$xml->prospect->customer->contact->name[0];
		$adf->last = (string)$xml->prospect->customer->contact->name[1];
		$adf->email = (string)$xml->prospect->customer->contact->email;
		$adf->phone = (string)$xml->prospect->customer->contact->phone;
		$adf->vendor = (string)$xml->prospect->vendor->contact->name;
		
		return $adf;
	}
	
}