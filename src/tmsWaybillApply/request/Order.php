<?php

namespace Zeroibc\tmsWaybillApply\request;

class Order
{
	var $customerOrderCode;
	var $parcelWeight;
	var $note;
	/**
	 * @var {tmsWaybillApply\request\Contact}
	 */
	var $sender;
	/**
	 * @var {tmsWaybillApply\request\Contact}
	 */
	var $receiver;

	public function getCustomerOrderCode()
	{
		return $this->customerOrderCode;
	}

	public function setCustomerOrderCode($value)
	{
		$this->customerOrderCode = $value;
	}

	public function getParcelWeight()
	{
		return $this->parcelWeight;
	}

	public function setParcelWeight($value)
	{
		$this->parcelWeight = $value;
	}

	public function getNote()
	{
		return $this->note;
	}

	public function setNote($value)
	{
		$this->note = $value;
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

}