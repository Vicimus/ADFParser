<?php

namespace Vicimus\Adfparser;

class ADFParser
{
	public $date;
	public $vehicle;
	public $customer;
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

		$adf->customer = new Customer($xml->prospect->customer);

		$adf->vendor = (string)$xml->prospect->vendor->contact->name;
		
		$adf->provider = new Provider($xml->prospect->provider);
		
		return $adf;
	}
	
}