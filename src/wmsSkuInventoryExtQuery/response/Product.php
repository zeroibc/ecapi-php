<?php

namespace Zeroibc\wmsSkuInventoryExtQuery\response;

class Product
{
	var $itemSkuCode;
	var $providerCode;
	var $totalQuantity;
	var $normalQuantity;
	var $defectiveQuantity;
	var $frozenQuantity;
	/**
	 * @var {wmsSkuInventoryExtQuery\response\Batchs}
	 */
	var $batchs;

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

	public function getTotalQuantity()
	{
		return $this->totalQuantity;
	}

	public function setTotalQuantity($value)
	{
		$this->totalQuantity = $value;
	}

	public function getNormalQuantity()
	{
		return $this->normalQuantity;
	}

	public function setNormalQuantity($value)
	{
		$this->normalQuantity = $value;
	}

	public function getDefectiveQuantity()
	{
		return $this->defectiveQuantity;
	}

	public function setDefectiveQuantity($value)
	{
		$this->defectiveQuantity = $value;
	}

	public function getFrozenQuantity()
	{
		return $this->frozenQuantity;
	}

	public function setFrozenQuantity($value)
	{
		$this->frozenQuantity = $value;
	}

	public function getBatchs()
	{
		return $this->batchs;
	}

	public function setBatchs($value)
	{
		$this->batchs = $value;
	}

}