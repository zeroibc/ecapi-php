<?php

namespace Zeroibc\tmsWaybillApply\request;

use Zeroibc\BaseRequest;

class TmsWaybillApplyReq implements BaseRequest
{
	var $customerCode;
	var $projectCode;
	var $siteFlag;
	var $requestID;
	/**
	 * @var {tmsWaybillApply\request\Orders}
	 */
	var $orders;

	public function getCustomerCode()
	{
		return $this->customerCode;
	}

	public function setCustomerCode($value)
	{
		$this->customerCode = $value;
	}

	public function getProjectCode()
	{
		return $this->projectCode;
	}

	public function setProjectCode($value)
	{
		$this->projectCode = $value;
	}

	public function getSiteFlag()
	{
		return $this->siteFlag;
	}

	public function setSiteFlag($value)
	{
		$this->siteFlag = $value;
	}

	public function getRequestID()
	{
		return $this->requestID;
	}

	public function setRequestID($value)
	{
		$this->requestID = $value;
	}

	public function getOrders()
	{
		return $this->orders;
	}

	public function setOrders($value)
	{
		$this->orders = $value;
	}

	public function obtainServiceType()
	{
		return "TMS_WAYBILL_APPLY";
	}
}