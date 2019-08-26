<?php

namespace Zeroibc\tmsTraceQuery\response;

class Shippings
{
	/**
	 * @var array{tmsTraceQuery\response\Shipping}
	 */
	var $shipping;

	public function getShipping()
	{
		return $this->shipping;
	}

	public function setShipping($value)
	{
		$this->shipping = $value;
	}

}