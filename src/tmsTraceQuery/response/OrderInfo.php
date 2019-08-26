<?php

namespace Zeroibc\tmsTraceQuery\response;

class OrderInfo
{
	var $customerCode;
	var $customerName;
	var $projectCode;
	var $orderCode;
	var $status;
	var $portalUrl;
	var $currentStatusDatetime;
	var $currentStatusLocation;
	var $currentStatusDescription;
	var $currentStatusUpdator;
	/**
	 * @var {tmsTraceQuery\response\Shippings}
	 */
	var $shippings;
	var $tmsCode;

	public function getCustomerCode()
	{
		return $this->customerCode;
	}

	public function setCustomerCode($value)
	{
		$this->customerCode = $value;
	}

	public function getCustomerName()
	{
		return $this->customerName;
	}

	public function setCustomerName($value)
	{
		$this->customerName = $value;
	}

	public function getProjectCode()
	{
		return $this->projectCode;
	}

	public function setProjectCode($value)
	{
		$this->projectCode = $value;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderCode($value)
	{
		$this->orderCode = $value;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($value)
	{
		$this->status = $value;
	}

	public function getPortalUrl()
	{
		return $this->portalUrl;
	}

	public function setPortalUrl($value)
	{
		$this->portalUrl = $value;
	}

	public function getCurrentStatusDatetime()
	{
		return $this->currentStatusDatetime;
	}

	public function setCurrentStatusDatetime($value)
	{
		$this->currentStatusDatetime = $value;
	}

	public function getCurrentStatusLocation()
	{
		return $this->currentStatusLocation;
	}

	public function setCurrentStatusLocation($value)
	{
		$this->currentStatusLocation = $value;
	}

	public function getCurrentStatusDescription()
	{
		return $this->currentStatusDescription;
	}

	public function setCurrentStatusDescription($value)
	{
		$this->currentStatusDescription = $value;
	}

	public function getCurrentStatusUpdator()
	{
		return $this->currentStatusUpdator;
	}

	public function setCurrentStatusUpdator($value)
	{
		$this->currentStatusUpdator = $value;
	}

	public function getShippings()
	{
		return $this->shippings;
	}

	public function setShippings($value)
	{
		$this->shippings = $value;
	}

	public function getTmsCode()
	{
		return $this->tmsCode;
	}

	public function setTmsCode($value)
	{
		$this->tmsCode = $value;
	}

}