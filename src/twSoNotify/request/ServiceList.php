<?php

namespace Zeroibc\twSoNotify\request;

class ServiceList
{
	/**
	 * @var array{twSoNotify\request\Service}
	 */
	var $service = [];

	public function getService()
	{
		return $this->service;
	}

	public function setService($value)
	{
		$this->service[] = $value;
	}

}