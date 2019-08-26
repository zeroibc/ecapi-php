<?php

namespace Zeroibc\twSoNotify\request;

class ReferenceReq
{
	var $outorderType;
	var $outorderValue;

	public function getOutorderType()
	{
		return $this->outorderType;
	}

	public function setOutorderType($value)
	{
		$this->outorderType = $value;
	}

	public function getOutorderValue()
	{
		return $this->outorderValue;
	}

	public function setOutorderValue($value)
	{
		$this->outorderValue = $value;
	}

}