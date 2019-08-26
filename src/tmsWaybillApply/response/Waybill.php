<?php

namespace Zeroibc\tmsWaybillApply\response;

class Waybill
{
	var $mailNo;
	var $customerCode;
	var $customerOrderCode;
	var $markDestination;
	var $sortingSiteName;
	var $pkgCode;
	var $billProvideSiteName;
	var $billProvideSiteCode;
	var $note;
	var $sortingSiteCode;
	var $sortingCode;

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setMailNo($value)
	{
		$this->mailNo = $value;
	}

	public function getCustomerCode()
	{
		return $this->customerCode;
	}

	public function setCustomerCode($value)
	{
		$this->customerCode = $value;
	}

	public function getCustomerOrderCode()
	{
		return $this->customerOrderCode;
	}

	public function setCustomerOrderCode($value)
	{
		$this->customerOrderCode = $value;
	}

	public function getMarkDestination()
	{
		return $this->markDestination;
	}

	public function setMarkDestination($value)
	{
		$this->markDestination = $value;
	}

	public function getSortingSiteName()
	{
		return $this->sortingSiteName;
	}

	public function setSortingSiteName($value)
	{
		$this->sortingSiteName = $value;
	}

	public function getPkgCode()
	{
		return $this->pkgCode;
	}

	public function setPkgCode($value)
	{
		$this->pkgCode = $value;
	}

	public function getBillProvideSiteName()
	{
		return $this->billProvideSiteName;
	}

	public function setBillProvideSiteName($value)
	{
		$this->billProvideSiteName = $value;
	}

	public function getBillProvideSiteCode()
	{
		return $this->billProvideSiteCode;
	}

	public function setBillProvideSiteCode($value)
	{
		$this->billProvideSiteCode = $value;
	}

	public function getNote()
	{
		return $this->note;
	}

	public function setNote($value)
	{
		$this->note = $value;
	}

	public function getSortingSiteCode()
	{
		return $this->sortingSiteCode;
	}

	public function setSortingSiteCode($value)
	{
		$this->sortingSiteCode = $value;
	}

	public function getSortingCode()
	{
		return $this->sortingCode;
	}

	public function setSortingCode($value)
	{
		$this->sortingCode = $value;
	}

}