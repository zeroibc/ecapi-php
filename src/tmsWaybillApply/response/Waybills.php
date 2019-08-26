<?php

namespace Zeroibc\tmsWaybillApply\response;

class Waybills
{
	/**
	 * @var array{tmsWaybillApply\response\Waybill}
	 */
	var $waybill;

	public function getWaybill()
	{
		return $this->waybill;
	}

	public function setWaybill($value)
	{
		$this->waybill = $value;
	}

}