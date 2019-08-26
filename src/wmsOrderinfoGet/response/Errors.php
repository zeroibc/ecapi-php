<?php

namespace Zeroibc\wmsOrderinfoGet\response;

class Errors
{
	/**
	 * @var array{wmsOrderinfoGet\response\Error}
	 */
	var $error;

	public function getError()
	{
		return $this->error;
	}

	public function setError($value)
	{
		$this->error = $value;
	}

}