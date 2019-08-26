<?php
namespace Zeroibc\wmsSkuNotify\response;

class Errors
{
/**
     * @var array{wmsSkuNotify\response\Error}
     */
	var $error;

    public function getError()
    {
        return $this->error;
    }

    public function setError($value)
    {
        $this->error = $value;
    }

}