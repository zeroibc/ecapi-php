<?php

namespace Zeroibc\twSoNotify\request;

class Receiver
{
	var $name;
	var $province;
	var $city;
	var $district;
	var $address;
	var $contactName;
	var $phone;
	var $earlyDeliveryTime;
	var $lateDeliveryTime;

	public function getName()
	{
		return $this->name;
	}

	public function setName($value)
	{
		$this->name = $value;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setProvince($value)
	{
		$this->province = $value;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCity($value)
	{
		$this->city = $value;
	}

	public function getDistrict()
	{
		return $this->district;
	}

	public function setDistrict($value)
	{
		$this->district = $value;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setAddress($value)
	{
		$this->address = $value;
	}

	public function getContactName()
	{
		return $this->contactName;
	}

	public function setContactName($value)
	{
		$this->contactName = $value;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPhone($value)
	{
		$this->phone = $value;
	}

	public function getEarlyDeliveryTime()
	{
		return $this->earlyDeliveryTime;
	}

	public function setEarlyDeliveryTime($value)
	{
		$this->earlyDeliveryTime = $value;
	}

	public function getLateDeliveryTime()
	{
		return $this->lateDeliveryTime;
	}

	public function setLateDeliveryTime($value)
	{
		$this->lateDeliveryTime = $value;
	}

}