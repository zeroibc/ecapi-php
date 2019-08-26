<?php

namespace Zeroibc\wmsOrderinfoGet\response;

class TrackingInfo
{
	var $status;
	var $timePoint;
	var $courier;
	var $courierPhone;
	var $description;

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($value)
	{
		$this->status = $value;
	}

	public function getTimePoint()
	{
		return $this->timePoint;
	}

	public function setTimePoint($value)
	{
		$this->timePoint = $value;
	}

	public function getCourier()
	{
		return $this->courier;
	}

	public function setCourier($value)
	{
		$this->courier = $value;
	}

	public function getCourierPhone()
	{
		return $this->courierPhone;
	}

	public function setCourierPhone($value)
	{
		$this->courierPhone = $value;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($value)
	{
		$this->description = $value;
	}

}