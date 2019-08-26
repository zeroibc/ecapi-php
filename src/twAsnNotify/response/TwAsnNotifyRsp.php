<?php

namespace Zeroibc\twAsnNotify\response;

class TwAsnNotifyRsp
{
	var $result;
	var $note;
	var $errorCode;
	var $errorDescription;

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

	public function getErrorCode()
	{
		return $this->errorCode;
	}

	public function setErrorCode($value)
	{
		$this->errorCode = $value;
	}

	public function getErrorDescription()
	{
		return $this->errorDescription;
	}

	public function setErrorDescription($value)
	{
		$this->errorDescription = $value;
	}

}