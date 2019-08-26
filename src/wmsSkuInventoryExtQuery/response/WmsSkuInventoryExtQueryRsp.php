<?php

namespace Zeroibc\wmsSkuInventoryExtQuery\response;

class WmsSkuInventoryExtQueryRsp
{
	var $result;
	var $note;
	/**
	 * @var {wmsSkuInventoryExtQuery\response\Errors}
	 */
	var $errors;
	/**
	 * @var {wmsSkuInventoryExtQuery\response\Products}
	 */
	var $products;

	public function getResult()
	{
		return $this->result;
	}

	public function setResult($value)
	{
		$this->result = $value;
	}

	public function getNote()
	{
		return $this->note;
	}

	public function setNote($value)
	{
		$this->note = $value;
	}

	public function getErrors()
	{
		return $this->errors;
	}

	public function setErrors($value)
	{
		$this->errors = $value;
	}

	public function getProducts()
	{
		return $this->products;
	}

	public function setProducts($value)
	{
		$this->products = $value;
	}

}