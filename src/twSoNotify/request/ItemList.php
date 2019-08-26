<?php

namespace Zeroibc\twSoNotify\request;

class ItemList
{
	/**
	 * @var array{twSoNotify\request\Item}
	 */
	var $item = [];

	public function getItem()
	{
		return $this->item;
	}

	public function setItem($value)
	{
		$this->item[] = $value;
	}

}