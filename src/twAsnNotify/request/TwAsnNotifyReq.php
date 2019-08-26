<?php

namespace Zeroibc\twAsnNotify\request;

use Zeroibc\BaseRequest;

class TwAsnNotifyReq implements BaseRequest
{
	var $operationFlag;
	var $customerCode;
	var $customerName;
	var $projectCode;
	var $transportMode;
	var $vehicleModel;
	var $logisticsCode;
	var $orderDescription;
	var $shippingOrderNo;
	var $orderCode;
	var $asnOrders;
	var $productCode;
	var $tradeMark;
	var $totalAmount;
	var $warehouseCode;
	var $actionType;
	var $refOrderCode;
	var $extTradeId;
	var $operationTypeCode;
	var $extOrderType;
	var $orderTime;
	var $earliestArrivalTime;
	var $latestArrivalTime;
	var $tmsCompany;
	var $tmsLinkman;
	var $tmsPhone;
	var $tmsLinkmanNo;
	var $tmsShippingNo;
	var $remark;
	var $udfFlag;
	var $udf1;
	var $udf2;
	var $udf3;
	var $udf4;
	var $udf5;
	var $udf6;
	var $udf7;
	var $udf8;
	/**
	 * @var {twAsnNotify\request\Sender}
	 */
	var $sender;
	/**
	 * @var {twAsnNotify\request\Receiver}
	 */
	var $receiver;
	/**
	 * @var {twAsnNotify\request\ServiceList}
	 */
	var $serviceList;
	/**
	 * @var {twAsnNotify\request\ItemList}
	 */
	var $itemList;
	/**
	 * @var {twAsnNotify\request\ReferenceReqList}
	 */
	var $referenceReqList;
	var $goodsValue;
	var $cheapAmount;
	var $businessScenarioCode;

	public function getOperationFlag()
	{
		return $this->operationFlag;
	}

	public function setOperationFlag($value)
	{
		$this->operationFlag = $value;
	}

	public function getCustomerCode()
	{
		return $this->customerCode;
	}

	public function setCustomerCode($value)
	{
		$this->customerCode = $value;
	}

	public function getCustomerName()
	{
		return $this->customerName;
	}

	public function setCustomerName($value)
	{
		$this->customerName = $value;
	}

	public function getProjectCode()
	{
		return $this->projectCode;
	}

	public function setProjectCode($value)
	{
		$this->projectCode = $value;
	}

	public function getTransportMode()
	{
		return $this->transportMode;
	}

	public function setTransportMode($value)
	{
		$this->transportMode = $value;
	}

	public function getVehicleModel()
	{
		return $this->vehicleModel;
	}

	public function setVehicleModel($value)
	{
		$this->vehicleModel = $value;
	}

	public function getLogisticsCode()
	{
		return $this->logisticsCode;
	}

	public function setLogisticsCode($value)
	{
		$this->logisticsCode = $value;
	}

	public function getOrderDescription()
	{
		return $this->orderDescription;
	}

	public function setOrderDescription($value)
	{
		$this->orderDescription = $value;
	}

	public function getShippingOrderNo()
	{
		return $this->shippingOrderNo;
	}

	public function setShippingOrderNo($value)
	{
		$this->shippingOrderNo = $value;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderCode($value)
	{
		$this->orderCode = $value;
	}

	public function getAsnOrders()
	{
		return $this->asnOrders;
	}

	public function setAsnOrders($value)
	{
		$this->asnOrders = $value;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

	public function setProductCode($value)
	{
		$this->productCode = $value;
	}

	public function getTradeMark()
	{
		return $this->tradeMark;
	}

	public function setTradeMark($value)
	{
		$this->tradeMark = $value;
	}

	public function getTotalAmount()
	{
		return $this->totalAmount;
	}

	public function setTotalAmount($value)
	{
		$this->totalAmount = $value;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function setWarehouseCode($value)
	{
		$this->warehouseCode = $value;
	}

	public function getActionType()
	{
		return $this->actionType;
	}

	public function setActionType($value)
	{
		$this->actionType = $value;
	}

	public function getRefOrderCode()
	{
		return $this->refOrderCode;
	}

	public function setRefOrderCode($value)
	{
		$this->refOrderCode = $value;
	}

	public function getExtTradeId()
	{
		return $this->extTradeId;
	}

	public function setExtTradeId($value)
	{
		$this->extTradeId = $value;
	}

	public function getOperationTypeCode()
	{
		return $this->operationTypeCode;
	}

	public function setOperationTypeCode($value)
	{
		$this->operationTypeCode = $value;
	}

	public function getExtOrderType()
	{
		return $this->extOrderType;
	}

	public function setExtOrderType($value)
	{
		$this->extOrderType = $value;
	}

	public function getOrderTime()
	{
		return $this->orderTime;
	}

	public function setOrderTime($value)
	{
		$this->orderTime = $value;
	}

	public function getEarliestArrivalTime()
	{
		return $this->earliestArrivalTime;
	}

	public function setEarliestArrivalTime($value)
	{
		$this->earliestArrivalTime = $value;
	}

	public function getLatestArrivalTime()
	{
		return $this->latestArrivalTime;
	}

	public function setLatestArrivalTime($value)
	{
		$this->latestArrivalTime = $value;
	}

	public function getTmsCompany()
	{
		return $this->tmsCompany;
	}

	public function setTmsCompany($value)
	{
		$this->tmsCompany = $value;
	}

	public function getTmsLinkman()
	{
		return $this->tmsLinkman;
	}

	public function setTmsLinkman($value)
	{
		$this->tmsLinkman = $value;
	}

	public function getTmsPhone()
	{
		return $this->tmsPhone;
	}

	public function setTmsPhone($value)
	{
		$this->tmsPhone = $value;
	}

	public function getTmsLinkmanNo()
	{
		return $this->tmsLinkmanNo;
	}

	public function setTmsLinkmanNo($value)
	{
		$this->tmsLinkmanNo = $value;
	}

	public function getTmsShippingNo()
	{
		return $this->tmsShippingNo;
	}

	public function setTmsShippingNo($value)
	{
		$this->tmsShippingNo = $value;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setRemark($value)
	{
		$this->remark = $value;
	}

	public function getUdfFlag()
	{
		return $this->udfFlag;
	}

	public function setUdfFlag($value)
	{
		$this->udfFlag = $value;
	}

	public function getUdf1()
	{
		return $this->udf1;
	}

	public function setUdf1($value)
	{
		$this->udf1 = $value;
	}

	public function getUdf2()
	{
		return $this->udf2;
	}

	public function setUdf2($value)
	{
		$this->udf2 = $value;
	}

	public function getUdf3()
	{
		return $this->udf3;
	}

	public function setUdf3($value)
	{
		$this->udf3 = $value;
	}

	public function getUdf4()
	{
		return $this->udf4;
	}

	public function setUdf4($value)
	{
		$this->udf4 = $value;
	}

	public function getUdf5()
	{
		return $this->udf5;
	}

	public function setUdf5($value)
	{
		$this->udf5 = $value;
	}

	public function getUdf6()
	{
		return $this->udf6;
	}

	public function setUdf6($value)
	{
		$this->udf6 = $value;
	}

	public function getUdf7()
	{
		return $this->udf7;
	}

	public function setUdf7($value)
	{
		$this->udf7 = $value;
	}

	public function getUdf8()
	{
		return $this->udf8;
	}

	public function setUdf8($value)
	{
		$this->udf8 = $value;
	}

	public function getSender()
	{
		return $this->sender;
	}

	public function setSender($value)
	{
		$this->sender = $value;
	}

	public function getReceiver()
	{
		return $this->receiver;
	}

	public function setReceiver($value)
	{
		$this->receiver = $value;
	}

	public function getServiceList()
	{
		return $this->serviceList;
	}

	public function setServiceList($value)
	{
		$this->serviceList = $value;
	}

	public function getItemList()
	{
		return $this->itemList;
	}

	public function setItemList($value)
	{
		$this->itemList = $value;
	}

	public function getReferenceReqList()
	{
		return $this->referenceReqList;
	}

	public function setReferenceReqList($value)
	{
		$this->referenceReqList = $value;
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

	public function getBusinessScenarioCode()
	{
		return $this->businessScenarioCode;
	}

	public function setBusinessScenarioCode($value)
	{
		$this->businessScenarioCode = $value;
	}

	public function obtainServiceType()
	{
		return "TW_ASN_NOTIFY";
	}
}