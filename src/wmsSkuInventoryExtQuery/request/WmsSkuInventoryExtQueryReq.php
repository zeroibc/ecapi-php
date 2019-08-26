<?php

namespace Zeroibc\wmsSkuInventoryExtQuery\request;

use Zeroibc\BaseRequest;

class WmsSkuInventoryExtQueryReq implements BaseRequest
{
	var $customerCode;
	var $warehouseCode;
	/**
	 * @var {wmsSkuInventoryExtQuery\request\Products}
	 */
	var $products;

	public function getCustomerCode()
	{
		return $this->customerCode;
	}

	public function setCustomerCode($value)
	{
		$this->customerCode = $value;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function setWarehouseCode($value)
	{
		$this->warehouseCode = $value;
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
		return "WMS_SKU_INVENTORY_EXT_QUERY";
	}
}