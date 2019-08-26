<?php

namespace Zeroibc\wmsOrderinfoGet\request;

use Zeroibc\BaseRequest;

class WmsOrderinfoGetReq implements BaseRequest
{
	var $customerCode;
	var $warehouseCode;
	/**
	 * @var {wmsOrderinfoGet\request\ShippingOrders}
	 */
	var $shippingOrders;

	public function getCustomerCode()
	{
		return $this->customerCode;
	}

	public function setCustomerCode($value)
	{
		$this->customerCode = $value;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function setWarehouseCode($value)
	{
		$this->warehouseCode = $value;
	}

	public function getShippingOrders()
	{
		return $this->shippingOrders;
	}

	public function setShippingOrders($value)
	{
		$this->shippingOrders = $value;
	}

	public function obtainServiceType()
	{
		return "GetShippingOrderInfo";
	}
}