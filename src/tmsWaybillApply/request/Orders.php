<?php

namespace Zeroibc\tmsWaybillApply\request;

class Orders
{
	/**
	 * @var array{tmsWaybillApply\request\Order}
	 */
	var $order;

	public function getOrder()
	{
		return $this->order;
	}

	public function setOrder($value)
	{
		$this->order = $value;
	}

}