<?php

namespace Zeroibc\tmsTraceQuery\request;

use Zeroibc\BaseRequest;

class TmsTraceQueryReq implements BaseRequest
{
	var $orderCode;
	var $shipmentCode;
	var $customerCode;
	var $createTimeFrom;
	var $createTimeTo;

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderCode($value)
	{
		$this->orderCode = $value;
	}

	public function getShipmentCode()
	{
		return $this->shipmentCode;
	}

	public function setShipmentCode($value)
	{
		$this->shipmentCode = $value;
	}

	public function getCustomerCode()
	{
		return $this->customerCode;
	}

	public function setCustomerCode($value)
	{
		$this->customerCode = $value;
	}

	public function getCreateTimeFrom()
	{
		return $this->createTimeFrom;
	}

	public function setCreateTimeFrom($value)
	{
		$this->createTimeFrom = $value;
	}

	public function getCreateTimeTo()
	{
		return $this->createTimeTo;
	}

	public function setCreateTimeTo($value)
	{
		$this->createTimeTo = $value;
	}

	public function obtainServiceType()
	{
		return "TMS_TRACE_QUERY";
	}
}