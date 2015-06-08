<?php

namespace Vicimus\Adfparser;

class Vehicle
{
	public $year;
	public $make;
	public $model;
	public $vin;
	public $stock;
	public $trim;
	public $interest;
	public $status;
	public $price;

	public function __construct(\SimpleXMLElement $object = null)
	{
		if(!is_null($object))
		{
			$this->year = (string)$object->year;
			$this->make = (string)$object->make;
			$this->model = (string)$object->model;
			$this->vin = (string)$object->vin;
			$this->stock = (string)$object->stock;
			$this->trim = (string)$object->trim;
			$this->price = (string)$object->price;
			$this->interest = (string)$object['interest'];
			$this->status = (string)$object['status'];
		}
	}
}