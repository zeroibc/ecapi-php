<?php

namespace Zeroibc\tmsWaybillApply\response;

class TmsWaybillApplyRsp
{
	var $result;
	/**
	 * @var {tmsWaybillApply\response\Errors}
	 */
	var $errors;
	/**
	 * @var {tmsWaybillApply\response\Waybills}
	 */
	var $waybills;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getErrors()
	{
		return $this->errors;
	}

	public function setErrors($value)
	{
		$this->errors = $value;
	}

	public function getWaybills()
	{
		return $this->waybills;
	}

	public function setWaybills($value)
	{
		$this->waybills = $value;
	}

}