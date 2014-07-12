<?php

/**
 * Created by JetBrains PhpStorm.
 * User: smedi_000
 * Date: 8/06/13
 * Time: 8:16 PM
 * To change this template use File | Settings | File Templates.
 */
class College
{
	protected $_collegeId;
	protected $_collegeName;
	protected $_collegeLocation;
	public $storage;
	//
	public $college1;
	public $college2;
	public $college3;
	public $college4;

	//
	public function search()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		$sql_query = 'SELECT entity_name ';
		$sql_query .= 'FROM education_provider ';
		$sql_query .= 'WHERE edu_providerID = ' . $this->college1 . '';
		//
		//print_r($sql_query);die;
		$result = $mysqli->query($sql_query);
		$row = $result->fetch_assoc();
		$this->storage = $row['entity_name'];
		return $this->storage;
		//
	}

	//
	public function getCollege()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		$storage = '';
		$sql_query = 'SELECT edu_providerID, entity_name ';
		$sql_query .= 'FROM education_provider ';
		//
		$result = $mysqli->query($sql_query);
		$row = $result->fetch_assoc();
		//
		$this->storage .= "<option value=\"0\">:: Choose College ::</option>";
		//
		while ($row = $result->fetch_array()) {
			$this->_collegeName = $row['entity_name'];
			$this->_collegeId = $row['edu_providerID'];
			$this->storage .= "<option value=\"" . $this->_collegeId . "\">" . $this->_collegeName . "</option>";
		}
		//return $storage;
		return $this->storage;
	}

	public function chooseCollege($college1, $college2, $college3, $college4)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		//$storage = '';
		$sql_query = 'SELECT edu_providerID, entity_name ';
		$sql_query .= 'FROM education_provider ';
		$sql_query .= 'WHERE edu_providerID IN (' . $this->college1 . ',' . $this->college2 . ',' . $this->college3 . ',' . $this->college4 . ')';
		//
		print_r($sql_query);
		exit;
		$result = $mysqli->query($sql_query);
		$row = $result->fetch_assoc();
		//
		//while ($row = $result->fetch_array()){
		//   $this->_collegeName = $row['entity_name'];
		// $this->_collegeId = $row['edu_providerID'];
		$this->storage = $result->fetch_assoc();
		//}
		//var_export($this->storage);
		return $this->storage;

	}
}