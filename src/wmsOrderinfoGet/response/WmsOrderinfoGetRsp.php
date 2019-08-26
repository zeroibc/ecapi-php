<?php

namespace Zeroibc\wmsOrderinfoGet\response;

class WmsOrderinfoGetRsp
{
	var $flag;
	var $note;
	/**
	 * @var {wmsOrderinfoGet\response\Errors}
	 */
	var $errors;
	/**
	 * @var {wmsOrderinfoGet\response\SalesOrders}
	 */
	var $salesOrders;

	public function getFlag()
	{
		return $this->flag;
	}

	public function setFlag($value)
	{
		$this->flag = $value;
	}

	public function getNote()
	{
		return $this->note;
	}

	public function setNote($value)
	{
		$this->note = $value;
	}

	public function getErrors()
	{
		return $this->errors;
	}

	public function setErrors($value)
	{
		$this->errors = $value;
	}

	public function getSalesOrders()
	{
		return $this->salesOrders;
	}

	public function setSalesOrders($value)
	{
		$this->salesOrders = $value;
	}

}