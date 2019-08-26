<?php

namespace Zeroibc\tmsWaybillApply\response;

class Error
{
	var $errorCode;
	var $errorDescription;

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