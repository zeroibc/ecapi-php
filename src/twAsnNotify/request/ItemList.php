<?php

namespace Zeroibc\twAsnNotify\request;

class ItemList
{
	/**
	 * @var array{twAsnNotify\request\Item}
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