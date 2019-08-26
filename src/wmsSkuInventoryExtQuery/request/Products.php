<?php

namespace Zeroibc\wmsSkuInventoryExtQuery\request;

class Products
{
	/**
	 * @var array{wmsSkuInventoryExtQuery\request\Product}
	 */
	var $product;

	public function getProduct()
	{
		return $this->product;
	}

	public function setProduct($value)
	{
		$this->product = $value;
	}

}