<?php

namespace Zeroibc\twCancelNotify\response;

class TwCancelNotiryRsp
{
	var $result;
	var $note;
	var $errorDescription;

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

	public function getErrorDescription()
	{
		return $this->errorDescription;
	}

	public function setErrorDescription($value)
	{
		$this->errorDescription = $value;
	}

}