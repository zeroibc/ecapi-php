<?php

namespace Zeroibc;

class Sign
{
	public static function makeSign($signString)
	{
		return Sign::md5Sign($signString);;
	}

	public static function base64Encode($signString)
	{
		$md5String = md5($signString, true);
		$sign      = base64_encode($md5String);

		return $sign;
	}

	public static function md5Sign($signString)
	{
		$sign = md5($signString, false);

		return $sign;
	}
}