<?php

namespace Zeroibc\tmsWaybillApply\response;

class Errors
{
	/**
	 * @var array{tmsWaybillApply\response\Error}
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