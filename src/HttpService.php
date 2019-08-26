<?php

namespace Zeroibc;

class HttpService
{
	public static function service($paramArray, $url)
	{
		$headers   = [];
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
		$ch        = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $paramArray);
		$return = curl_exec($ch);
		curl_close($ch);

		return $return;
	}

	public static function serviceBody($paramArray, $url, $body)
	{
		$headers   = [];
		$headers[] = 'Content-Type: text/xml; charset=utf-8';
		$ch        = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url . "?" . $paramArray);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		$return = curl_exec($ch);
		curl_close($ch);

		return $return;
	}
}
