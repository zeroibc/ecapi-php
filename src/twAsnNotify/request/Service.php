<?php

namespace Zeroibc\twAsnNotify\request;

class Service
{
	var $serviceDefinitionCode;
	/**
	 * @var {twAsnNotify\request\ServiceCodeList}
	 */
	var $serviceCodeList;

	public function getServiceDefinitionCode()
	{
		return $this->serviceDefinitionCode;
	}

	public function setServiceDefinitionCode($value)
	{
		$this->serviceDefinitionCode = $value;
	}

	public function getServiceCodeList()
	{
		return $this->serviceCodeList;
	}

	public function setServiceCodeList($value)
	{
		$this->serviceCodeList = $value;
	}

}