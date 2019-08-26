<?php

namespace Zeroibc\twCancelNotify\request;
use Zeroibc\BaseRequest;

class TwCancelNotiryReq implements BaseRequest
{
	var $customerCode;
	var $orderCode;
	var $operationTypeCode;

	public function getCustomerCode()
	{
		return $this->customerCode;
	}

	public function setCustomerCode($value)
	{
		$this->customerCode = $value;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderCode($value)
	{
		$this->orderCode = $value;
	}

	public function getOperationTypeCode()
	{
		return $this->operationTypeCode;
	}

	public function setOperationTypeCode($value)
	{
		$this->operationTypeCode = $value;
	}

	public function obtainServiceType()
	{
		return "TW_CANCEL_NOTIRY";
	}
}