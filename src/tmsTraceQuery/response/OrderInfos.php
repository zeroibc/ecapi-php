<?php

namespace Zeroibc\tmsTraceQuery\response;

class OrderInfos
{
	/**
	 * @var array{tmsTraceQuery\response\OrderInfo}
	 */
	var $orderInfo;

	public function getOrderInfo()
	{
		return $this->orderInfo;
	}

	public function setOrderInfo($value)
	{
		$this->orderInfo = $value;
	}

}