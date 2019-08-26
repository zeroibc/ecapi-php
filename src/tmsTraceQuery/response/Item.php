<?php

namespace Zeroibc\tmsTraceQuery\response;

class Item
{
	var $itemCode;
	var $itemName;
	var $packageUomCode;
	var $count;
	var $weight;
	var $volume;

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setItemCode($value)
	{
		$this->itemCode = $value;
	}

	public function getItemName()
	{
		return $this->itemName;
	}

	public function setItemName($value)
	{
		$this->itemName = $value;
	}

	public function getPackageUomCode()
	{
		return $this->packageUomCode;
	}

	public function setPackageUomCode($value)
	{
		$this->packageUomCode = $value;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setCount($value)
	{
		$this->count = $value;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function setWeight($value)
	{
		$this->weight = $value;
	}

	public function getVolume()
	{
		return $this->volume;
	}

	public function setVolume($value)
	{
		$this->volume = $value;
	}

}