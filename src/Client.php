<?php

namespace Zeroibc;

class Client
{
	var $url;
	var $partnerID;
	var $partnerKey;
	var $messageFormat = "XML";

	function __construct($url, $partnerID, $partnerKey, $messageFormat)
	{
		$this->url           = $url;
		$this->partnerID     = $partnerID;
		$this->partnerKey    = $partnerKey;
		$this->messageFormat = $messageFormat;
	}

	public function executed(BaseRequest $request)
	{
		$param = new Param();
		$param->setServiceType($request->obtainServiceType());
		$param->setBizData($this->makeBizData($request));
		$param->setPartnerID($this->partnerID);
		$param->setPartnerKey($this->partnerKey);

		$signString = $param->getBizData() . $param->getPartnerKey();

		$data       = [
			'serviceType' => $param->getServiceType(),
			'bizData'     => $param->getBizData(),
			'sign'        => Sign::makeSign($signString),
			'partnerID'   => $param->getPartnerID(),
		];
		$paramArray = http_build_query($data);
		$response   = HttpService::service($paramArray, $this->url);

		return $response;
	}

	private function makeBizData($request)
	{
		if (strcasecmp($this->messageFormat, "XML") == 0) {
			$bizData = Parser::coverObject2Xml($request);
		}
		else {
			$bizData = Parser::coverObject2Json($request);
		}

		return $bizData;
	}
}