<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smedi_000
 * Date: 6/06/13
 * Time: 11:55 PM
 * To change this template use File | Settings | File Templates.
 */

protected
$newCourseStartDate;
public
$courseDuration;
public
$courseTimeTable;
public
$courseEnrolmentFee;
public
$instalment;
public
$mediBankMonths;
public
$mediBankCost;
public
$visaFees;
public
$medicalExams;

class Instalments extends Quote
{
	function check()
	{
		var_dump($this->personID);
		$this->courseName;
		$this->instalment;
		return $this;
	}
}