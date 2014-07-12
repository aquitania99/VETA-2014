<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smedina
 * Date: 13/08/13
 * Time: 6:38 PM
 * To change this template use File | Settings | File Templates.
 */
//
class ReceiptNumbers
{

	public $receiptNumber;
	protected $invoiceNumber;

	public function getReceiptNumber()
	{
		//
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		$searchReceipts = 'SELECT receipt_number FROM payment_received ORDER BY paid_on DESC LIMIT 1';
		//
		$rsReceipts = $mysqli->query($searchReceipts);
		//
		$receiptsResults = $rsReceipts->fetch_array();
		//
		$exploit = explode('-', $receiptsResults['receipt_number']);
		$receiptNo = $exploit[1];
		//print_r($receiptNo);die;
		//xdebug_var_dump($receiptsResults);
		if ($receiptsResults['receipt_number'] == NULL) {
			$receiptNo = '1';
		};
		//print_r($receiptNo);
		$this->receiptNumber = $receiptNo;
		return $receiptNo;
		//
	}

//
	public function getInvNumber()
	{
		//
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		$searchReceipts = 'SELECT receipt_number FROM payment_received ORDER BY paid_on DESC LIMIT 1';
		//
		$rsReceipts = $mysqli->query($searchReceipts);
		//
		$receiptsResults = $rsReceipts->fetch_array();
		//
		$exploit = explode('-', $receiptsResults['receipt_number']);
		$receiptNo = $exploit[1];
		print_r($receiptNo);
		$this->receiptNumber = $receiptNo;
		return $receiptNo;
		//
	}
}