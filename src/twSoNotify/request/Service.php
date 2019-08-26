<?php

namespace Zeroibc\twSoNotify\request;

class Service
{
	var $serviceDefinitionCode;
	var $remark;
	/**
	 * @var {twSoNotify\request\ServiceCodeList}
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

	public function getRemark()
	{
		return $this->remark;
	}

	public function setRemark($value)
	{
		$this->remark = $value;
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