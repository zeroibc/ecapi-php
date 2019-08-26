<?php

namespace Zeroibc\tmsTraceQuery\response;

class Shipping
{
	var $logisticsCode;
	var $logisticsName;
	var $shipmentCode;
	var $transportMode;
	var $sourceLocationAddress;
	var $destLocationAddress;
	var $operateTime;
	var $operator;
	var $driverName;
	var $driverPhone;
	var $operateDescription;
	var $shipmentStatus;
	var $cod;
	var $codAmount;
	var $goodsValue;
	var $cheapAmount;
	var $codStatus;
	var $codPayType;
	/**
	 * @var {tmsTraceQuery\response\Items}
	 */
	var $items;
	/**
	 * @var {tmsTraceQuery\response\Traces}
	 */
	var $traces;
	var $referenceShipCode;

	public function getLogisticsCode()
	{
		return $this->logisticsCode;
	}

	public function setLogisticsCode($value)
	{
		$this->logisticsCode = $value;
	}

	public function getLogisticsName()
	{
		return $this->logisticsName;
	}

	public function setLogisticsName($value)
	{
		$this->logisticsName = $value;
	}

	public function getShipmentCode()
	{
		return $this->shipmentCode;
	}

	public function setShipmentCode($value)
	{
		$this->shipmentCode = $value;
	}

	public function getTransportMode()
	{
		return $this->transportMode;
	}

	public function setTransportMode($value)
	{
		$this->transportMode = $value;
	}

	public function getSourceLocationAddress()
	{
		return $this->sourceLocationAddress;
	}

	public function setSourceLocationAddress($value)
	{
		$this->sourceLocationAddress = $value;
	}

	public function getDestLocationAddress()
	{
		return $this->destLocationAddress;
	}

	public function setDestLocationAddress($value)
	{
		$this->destLocationAddress = $value;
	}

	public function getOperateTime()
	{
		return $this->operateTime;
	}

	public function setOperateTime($value)
	{
		$this->operateTime = $value;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setOperator($value)
	{
		$this->operator = $value;
	}

	public function getDriverName()
	{
		return $this->driverName;
	}

	public function setDriverName($value)
	{
		$this->driverName = $value;
	}

	public function getDriverPhone()
	{
		return $this->driverPhone;
	}

	public function setDriverPhone($value)
	{
		$this->driverPhone = $value;
	}

	public function getOperateDescription()
	{
		return $this->operateDescription;
	}

	public function setOperateDescription($value)
	{
		$this->operateDescription = $value;
	}

	public function getShipmentStatus()
	{
		return $this->shipmentStatus;
	}

	public function setShipmentStatus($value)
	{
		$this->shipmentStatus = $value;
	}

	public function getCod()
	{
		return $this->cod;
	}

	public function setCod($value)
	{
		$this->cod = $value;
	}

	public function getCodAmount()
	{
		return $this->codAmount;
	}

	public function setCodAmount($value)
	{
		$this->codAmount = $value;
	}

	public function getGoodsValue()
	{
		return $this->goodsValue;
	}

	public function setGoodsValue($value)
	{
		$this->goodsValue = $value;
	}

	public function getCheapAmount()
	{
		return $this->cheapAmount;
	}

	public function setCheapAmount($value)
	{
		$this->cheapAmount = $value;
	}

	public function getCodStatus()
	{
		return $this->codStatus;
	}

	public function setCodStatus($value)
	{
		$this->codStatus = $value;
	}

	public function getCodPayType()
	{
		return $this->codPayType;
	}

	public function setCodPayType($value)
	{
		$this->codPayType = $value;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setItems($value)
	{
		$this->items = $value;
	}

	public function getTraces()
	{
		return $this->traces;
	}

	public function setTraces($value)
	{
		$this->traces = $value;
	}

	public function getReferenceShipCode()
	{
		return $this->referenceShipCode;
	}

	public function setReferenceShipCode($value)
	{
		$this->referenceShipCode = $value;
	}

}