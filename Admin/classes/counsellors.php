<?php
/**
 * Created by JetBrains PhpStorm.
 * User: smedina
 * Date: 25/09/13
 * Time: 6:25 PM
 * To change this template use File | Settings | File Templates.
 */
//
class counsellors
{
	protected $cID;
	public $firstName;
	public $lastName;
	public $email;
	private $mobile;
	private $password;
	public $response;

	public function add($email, $fname, $lname, $mobile, $password)
	{
		//var_dump($_POST);die;
		//$recID = $_POST['recID'];
		$this->cID = strtoupper($fname[0]) . "-" . ucfirst($lname);
		//echo $this->cID."<br>";die;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		try {
			//
			$sql_query = 'INSERT INTO counsellors (recID, cID, firstName, LastName, email, mobile, status) ';
			$sql_query .= 'VALUES (\'\', \'' . $this->cID . '\', \'' . $fname . '\', \'' . $lname . '\', \'' . $email . '\', \'' . $mobile . '\', 1)';
			//
			$mysqli->query($sql_query);
			//
			$getRecID = 'SELECT max(recID) AS ID FROM counsellors';
			$result = $mysqli->query($getRecID);
			$row = $result->fetch_array();
			$recID = $row['ID'];
			//
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}
		//printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);
		if ($mysqli->affected_rows == 1) {
			$userKey = strtolower($fname[0] . $lname);
			try {
				$sql_query = 'INSERT INTO adminusers (userID, recID, userKey, login, password, dateAdded, lastLogin) ';
				$sql_query .= 'VALUES (\'\',' . $recID . ', \'' . MD5($userKey) . '\', \'' . $userKey . '\', PASSWORD(\'' . $password . '\'), NOW(), \'\')';
				$mysqli->query($sql_query);
				//
			} catch (Exception $e) {
				echo 'Caught exception: ', $e->getMessage(), "\n";
			}
			if (!empty($mysqli->affected_rows)) {
				echo "<script type='text/javascript'>window.location.reload()</script>";
			}
		}
	}

	public function update($recID, $email, $fname, $lname, $mobile, $password)
	{
		//var_dump($_POST);die;
		$fname = ucfirst(strtolower($_POST['firstName']));
		$lname = ucfirst(strtolower($_POST['lastName']));
		$mobile = $_POST['mobile'];
		$recID = $_POST['recID'];
		//
		$passwd = $_POST['password'];
		$this->cID = strtoupper($fname[0]) . "-" . ucfirst($lname);
		//echo $this->cID."<br>";die;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$userKey = strtolower($fname[0] . $lname);
		//
		try {
			//
			$sql_query = 'UPDATE counsellors SET cID = \'' . $this->cID . '\', firstName = \'' . $fname . '\', ';
			$sql_query .= 'LastName = \'' . $lname . '\', email = \'' . $email . '\', mobile = \'' . $mobile . '\', status = 1 ';
			$sql_query .= 'WHERE recID = ' . $recID . ' AND status = 1 ';
			//
			//print_r($sql_query);die;
			$mysqli->query($sql_query);
			//
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}
		//printf("Affected rows (UPDATE): %d\n", $mysqli->affected_rows);
		if ($mysqli->affected_rows == 1) {
			$sql_query = 'UPDATE adminusers SET userKey = \'' . MD5($userKey) . '\', ';
			$sql_query .= 'login = \'' . $userKey . '\', password = PASSWORD(\'' . $passwd . '\') ';
			$sql_query .= 'WHERE recID = \'' . $recID . '\'';
			//
			//print_r($sql_query);die;
			$mysqli->query($sql_query);
			//
			if (!empty($mysqli->affected_rows)) {
				echo "<script type='text/javascript'>window.location.reload()</script>";
			}
		}
	}

	public function delete($email, $access)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		$email = $_POST['email'];
		$access = $_POST['access'];

		if (!empty($_POST['email']) && !empty($_POST['access'])) {
			$email = $_POST['email'];
			$access = $_POST['access'];
			try {
				$sql_delete = 'DELETE counsellors WHERE email = \'' . $email . '\'';
				$mysqli->query($sql_delete);
				var_dump($sql_delete);
				die;
				//
				printf("Affected rows (UPDATE): %d\n", $mysqli->affected_rows);
				if ($mysqli->affected_rows == 1) {
					printf('Hooray Updated!!<br>');
					//
					$sql_delete = 'DELETE adminusers WHERE login = \'' . $access . '\'';
					$mysqli->query($sql_delete);
				}
				return;
			} catch (Exception $e) {
				echo 'Caught exception: ', $e->getMessage(), "\n";
			}
		}
	}

	public function check($cID)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//
		try {
			$sql_check = 'SELECT cID, firstName, lastName FROM counsellors ';
			$sql_check .= 'WHERE cID = \'' . $cID . '\' ';
			//var_dump($sql_check);die;
			$result = $mysqli->query($sql_check);
			$row = $result->fetch_array();
			//
			$this->response = $row;
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}
		return;
	}
}
