<?php

namespace Zeroibc\twAsnNotify\request;

class ServiceCode
{
	var $serviceDefParameterCode;
	var $actualValue;

	public function getServiceDefParameterCode()
	{
		return $this->serviceDefParameterCode;
	}

	public function setServiceDefParameterCode($value)
	{
		$this->serviceDefParameterCode = $value;
	}

	public function getActualValue()
	{
		return $this->actualValue;
	}

	public function setActualValue($value)
	{
		$this->actualValue = $value;
	}

}