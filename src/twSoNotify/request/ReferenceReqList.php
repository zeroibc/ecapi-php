<?php

namespace Zeroibc\twSoNotify\request;

class ReferenceReqList
{
	/**
	 * @var array{twSoNotify\request\ReferenceReq}
	 */
	var $referenceReq;

	public function getReferenceReq()
	{
		return $this->referenceReq;
	}

	public function setReferenceReq($value)
	{
		$this->referenceReq = $value;
	}

}