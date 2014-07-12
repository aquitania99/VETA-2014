<?php

/**
 * Created by JetBrains PhpStorm.
 * User: smedi_000
 * Date: 7/06/13
 * Time: 9:25 PM
 * To change this template use File | Settings | File Templates.
 */
class Time
{

	function GenerateCurrentTime()
	{
		$sTime = gmdate("d-m-Y H:i:s");
		return $sTime;
	}
}

$test = new Time;
$sTime = $test->GenerateCurrentTime();
print 'The time is: ' . $sTime;