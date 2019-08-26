<?php

namespace Zeroibc\twAsnNotify\request;

class ServiceCodeList
{
	/**
	 * @var array{twAsnNotify\request\ServiceCode}
	 */
	var $serviceCode;

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function setServiceCode($value)
	{
		$this->serviceCode = $value;
	}

}