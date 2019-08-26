<?php

namespace Zeroibc\tmsTraceQuery\response;

class Items
{
	/**
	 * @var array{tmsTraceQuery\response\Item}
	 */
	var $item;

	public function getItem()
	{
		return $this->item;
	}

	public function setItem($value)
	{
		$this->item = $value;
	}

}