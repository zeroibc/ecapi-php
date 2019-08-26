<?php

namespace Zeroibc\twSoNotify\request;

class ServiceCodeList
{
	/**
	 * @var array{twSoNotify\request\ServiceCode}
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