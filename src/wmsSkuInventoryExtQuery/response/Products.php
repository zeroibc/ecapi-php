<?php

namespace Zeroibc\wmsSkuInventoryExtQuery\response;

class Products
{
	/**
	 * @var array{wmsSkuInventoryExtQuery\response\Product}
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