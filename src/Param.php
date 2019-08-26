<?php

namespace Zeroibc;

class Param
{
	var $serviceType;
	var $bizData;
	var $sign;
	var $partnerID;
	var $partnerKey;


	public function getServiceType()
	{
		return $this->serviceType;
	}

	public function setServiceType($value)
	{
		$this->serviceType = $value;
	}

	public function getBizData()
	{
		return $this->bizData;
	}

	public function setBizData($value)
	{
		$this->bizData = $value;
	}

	public function getSign()
	{
		return $this->sign;
	}

	public function setSign($value)
	{
		$this->sign = $value;
	}

	public function getPartnerID()
	{
		return $this->partnerID;
	}

	public function setPartnerID($value)
	{
		$this->partnerID = $value;
	}

	public function getPartnerKey()
	{
		return $this->partnerKey;
	}

	public function setPartnerKey($value)
	{
		$this->partnerKey = $value;
	}
}