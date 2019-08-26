<?php

namespace Zeroibc\wmsOrderinfoGet\response;

class SalesOrders
{
	/**
	 * @var array{wmsOrderinfoGet\response\SalesOrder}
	 */
	var $salesOrder;

	public function getSalesOrder()
	{
		return $this->salesOrder;
	}

	public function setSalesOrder($value)
	{
		$this->salesOrder = $value;
	}

}