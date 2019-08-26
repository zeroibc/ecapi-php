<?php

namespace Zeroibc\tmsTraceQuery\response;

class Trace
{
	var $opTime;
	var $opStatus;
	var $opDesc;
	var $operator;
	var $opLocation;

	public function getOpTime()
	{
		return $this->opTime;
	}

	public function setOpTime($value)
	{
		$this->opTime = $value;
	}

	public function getOpStatus()
	{
		return $this->opStatus;
	}

	public function setOpStatus($value)
	{
		$this->opStatus = $value;
	}

	public function getOpDesc()
	{
		return $this->opDesc;
	}

	public function setOpDesc($value)
	{
		$this->opDesc = $value;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setOperator($value)
	{
		$this->operator = $value;
	}

	public function getOpLocation()
	{
		return $this->opLocation;
	}

	public function setOpLocation($value)
	{
		$this->opLocation = $value;
	}

}