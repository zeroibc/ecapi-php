<?php

namespace Zeroibc\tmsTraceQuery\response;

class Traces
{
	/**
	 * @var array{tmsTraceQuery\response\Trace}
	 */
	var $trace;

	public function getTrace()
	{
		return $this->trace;
	}

	public function setTrace($value)
	{
		$this->trace = $value;
	}

}