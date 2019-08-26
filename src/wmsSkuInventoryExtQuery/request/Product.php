<?php

namespace Zeroibc\wmsSkuInventoryExtQuery\request;

class Product
{
	var $itemSkuCode;
	var $providerCode;

	public function getItemSkuCode()
	{
		return $this->itemSkuCode;
	}

	public function setItemSkuCode($value)
	{
		$this->itemSkuCode = $value;
	}

	public function getProviderCode()
	{
		return $this->providerCode;
	}

	public function setProviderCode($value)
	{
		$this->providerCode = $value;
	}

}