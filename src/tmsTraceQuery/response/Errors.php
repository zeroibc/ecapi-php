<?php

namespace Zeroibc\tmsTraceQuery\response;

class Errors
{
	/**
	 * @var array{tmsTraceQuery\response\Error}
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