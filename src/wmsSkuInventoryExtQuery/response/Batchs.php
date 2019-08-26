<?php

namespace Zeroibc\wmsSkuInventoryExtQuery\response;

class Batchs
{
	/**
	 * @var array{wmsSkuInventoryExtQuery\response\Batch}
	 */
	var $batch;

	public function getBatch()
	{
		return $this->batch;
	}

	public function setBatch($value)
	{
		$this->batch = $value;
	}

}