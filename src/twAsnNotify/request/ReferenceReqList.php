<?php

namespace Zeroibc\twAsnNotify\request;

class ReferenceReqList
{
	/**
	 * @var array{twAsnNotify\request\ReferenceReq}
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