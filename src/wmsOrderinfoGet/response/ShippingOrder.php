<?php

namespace Zeroibc\wmsOrderinfoGet\response;

class ShippingOrder
{
	var $status;
	/**
	 * @var {wmsOrderinfoGet\response\TrackingInfoList}
	 */
	var $trackingInfoList;
	var $logisticsProviderCode;
	var $shippingOrderNo;

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($value)
	{
		$this->status = $value;
	}

	public function getTrackingInfoList()
	{
		return $this->trackingInfoList;
	}

	public function setTrackingInfoList($value)
	{
		$this->trackingInfoList = $value;
	}

	public function getLogisticsProviderCode()
	{
		return $this->logisticsProviderCode;
	}

	public function setLogisticsProviderCode($value)
	{
		$this->logisticsProviderCode = $value;
	}

	public function getShippingOrderNo()
	{
		return $this->shippingOrderNo;
	}

	public function setShippingOrderNo($value)
	{
		$this->shippingOrderNo = $value;
	}

}