<?php

namespace Zeroibc\tmsWaybillApply\request;

class Contact
{
	var $name;
	var $phone;
	var $province;
	var $city;
	var $district;
	var $address;
	var $postcode;

	public function getName()
	{
		return $this->name;
	}

	public function setName($value)
	{
		$this->name = $value;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPhone($value)
	{
		$this->phone = $value;
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

	public function getPostcode()
	{
		return $this->postcode;
	}

	public function setPostcode($value)
	{
		$this->postcode = $value;
	}

}