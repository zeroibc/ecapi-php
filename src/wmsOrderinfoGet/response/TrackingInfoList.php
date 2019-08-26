<?php

namespace Zeroibc\wmsOrderinfoGet\response;

class TrackingInfoList
{
	/**
	 * @var array{wmsOrderinfoGet\response\TrackingInfo}
	 */
	var $trackingInfo;

	public function getTrackingInfo()
	{
		return $this->trackingInfo;
	}

	public function setTrackingInfo($value)
	{
		$this->trackingInfo = $value;
	}

}