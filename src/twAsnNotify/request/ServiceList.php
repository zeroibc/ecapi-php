<?php

namespace Zeroibc\twAsnNotify\request;

class ServiceList
{
	/**
	 * @var array{twAsnNotify\request\Service}
	 */
	var $service;

	public function getService()
	{
		return $this->service;
	}

	public function setService($value)
	{
		$this->service = $value;
	}

}