<?php

namespace Zeroibc\wmsSkuNotify\response;

class WmsSkuNotifyRsp
{
	var $result;
	var $note;
	/**
	 * @var {wmsSkuNotify\response\Errors}
	 */
	var $errors;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
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

}