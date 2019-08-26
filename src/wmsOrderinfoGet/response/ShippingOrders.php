<?php

namespace Zeroibc\wmsOrderinfoGet\response;

class ShippingOrders
{
	/**
	 * @var array{wmsOrderinfoGet\response\ShippingOrder}
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