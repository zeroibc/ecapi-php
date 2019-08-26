<?php

namespace Zeroibc\wmsSkuNotify\request;

class Products
{
	/**
	 * @var array{wmsSkuNotify\request\Product}
	 */
	var $product = [];

	public function getProduct()
	{
		return $this->product;
	}

	public function setProduct($value)
	{
		$this->product[] = $value;
	}

}