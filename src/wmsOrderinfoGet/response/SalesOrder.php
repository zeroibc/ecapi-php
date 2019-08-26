<?php

namespace Zeroibc\wmsOrderinfoGet\response;

class SalesOrder
{
	var $orderCode;
	var $note;
	/**
	 * @var {wmsOrderinfoGet\response\ShippingOrders}
	 */
	var $shippingOrders;

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderCode($value)
	{
		$this->orderCode = $value;
	}

	public function getNote()
	{
		return $this->note;
	}

	public function setNote($value)
	{
		$this->note = $value;
	}

	public function getShippingOrders()
	{
		return $this->shippingOrders;
	}

	public function setShippingOrders($value)
	{
		$this->shippingOrders = $value;
	}

}