<?php

namespace Zeroibc\wmsSkuInventoryExtQuery\response;

class Errors
{
	/**
	 * @var array{wmsSkuInventoryExtQuery\response\Error}
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