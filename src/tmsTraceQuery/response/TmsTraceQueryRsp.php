<?php

namespace Zeroibc\tmsTraceQuery\response;

class TmsTraceQueryRsp
{
	var $result;
	/**
	 * @var {tmsTraceQuery\response\Errors}
	 */
	var $errors;
	/**
	 * @var {tmsTraceQuery\response\OrderInfos}
	 */
	var $orderInfos;

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

	public function getOrderInfos()
	{
		return $this->orderInfos;
	}

	public function setOrderInfos($value)
	{
		$this->orderInfos = $value;
	}

}