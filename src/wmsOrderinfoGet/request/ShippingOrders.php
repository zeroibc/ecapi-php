<?php

namespace Zeroibc\wmsOrderinfoGet\request;

class ShippingOrders
{
	/**
	 * @var array{wmsOrderinfoGet\request\String}
	 */
	var $shippingOrder;

	public function getShippingOrder()
	{
		return $this->shippingOrder;
	}

	public function setShippingOrder($value)
	{
		$this->shippingOrder = $value;
	}

}