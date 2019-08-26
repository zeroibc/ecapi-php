<?php

namespace Zeroibc\wmsSkuNotify\request;

use Zeroibc\BaseRequest;

class WmsSkuNotifyReq implements BaseRequest
{
	var $providerCode;
	/**
	 * @var {wmsSkuNotify\request\Products}
	 */
	var $products;

	public function getProviderCode()
	{
		return $this->providerCode;
	}

	public function setProviderCode($value)
	{
		$this->providerCode = $value;
	}

	public function getProducts()
	{
		return $this->products;
	}

	public function setProducts($value)
	{
		$this->products = $value;
	}

	public function obtainServiceType()
	{
		return "WMS_SKU_NOTIFY";
	}
}