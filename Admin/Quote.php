<?php

/**
 * Created by JetBrains PhpStorm.
 * User: smedi_000
 * Date: 27/05/13
 * Time: 6:38 PM
 * To change this template use File | Settings | File Templates.
 */
class Quote extends PDO
{
	# database handler
	protected $connection = null;

	# make a connection
	public function __construct($dsn, $username, $password)
	{
		try {
			# MySQL with PDO_MYSQL
			$this->connection = new PDO($dsn, $username, $password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			# call the get_error function
			$this->get_error($e);
		}
	}

	#get the number of rows in a result as a value string
	public function num_rows($query)
	{
		# create a prepared statement
		$stmt = $this->connection->prepare($query);

		try {
			# execute query
			$stmt->execute();

			# return the result
			return $stmt->rowCount();
		} catch (PDOException $e) {
			# call the get_error function
			$this->get_error($e);
		}
	}

	# fetch a single row of result as an array ( =  one dimensional array)
	public function fetch_assoc($query, $params = array())
	{
		try {
			# prepare the query
			$stmt = $this->connection->prepare($query);

			# if $params is not an array, let's make it array with one value of former $params
			if (!is_array($params)) $params = array($params);

			# the line
			//$params = is_array($params) ? $params : array($params);
			# is simply checking if the $params variable is an array, and if so, it creates an array with the original $params value as its only element, and assigns the array to $params.

			# This would allow you to provide a single variable to the query method, or an array of variables if the query has multiple placeholders.

			# The reason it doesn't use bindParam is because the values are being passed to the execute() method. With PDO you have multiple methods available for binding data to placeholders:

			# bindParam
			# bindValue
			# execute($values)

			# The big advantage for the bindParam method is if you are looping over an array of data, you can call bindParam once, to bind the placeholder to a specific variable name (even if that variable isn't defined yet) and it will get the current value of the specified variable each time the statement is executed.

			# execute the query
			$stmt->execute($params);

			# return the result
			return $stmt->fetch();
		} catch (PDOException $e) {
			# call the get_error function
			$this->get_error($e);
		}

		/*
		or,

		catch (Exception $e)
		{
			// Echo the error or Re-throw it to catch it higher up where you have more
			// information on where it occurred in your program.
			// e.g echo 'Error: ' . $e->getMessage();

			throw new Exception(
				__METHOD__ . 'Exception Raised for sql: ' . var_export($sql, true) .
				' Params: ' . var_export($params, true) .
				' Error_Info: ' . var_export($this->errorInfo(), true),
				0,
				$e);
		}
		*/
	}

	# fetch a multiple rows of result as a nested array ( = multi-dimensional array)
	public function fetch_all($query, $params = array())
	{
		try {
			# prepare the query
			$stmt = $this->connection->prepare($query);

			# if $params is not an array, let's make it array with one value of former $params
			if (!is_array($params)) $params = array($params);

			# execute the query
			$stmt->execute($params);

			# return the result
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			# call the get_error function
			$this->get_error($e);
		}
	}

	# return the current row of a result set as an object
	public function fetch_object($query, $params = array())
	{
		try {
			# prepare the query
			$stmt = $this->connection->prepare($query);

			# if $params is not an array, let's make it array with one value of former $params
			if (!is_array($params)) $params = array($params);

			# execute the query
			$stmt->execute($params);

			# return the result
			return $stmt->fetchObject();
		} catch (PDOException $e) {
			# call the get_error function
			$this->get_error($e);
		}
	}

	# insert or update data
	public function run_query($query, $params = array())
	{
		try {
			$stmt = $this->connection->prepare($query);
			$params = is_array($params) ? $params : array($params);
			$stmt->execute($params);
			return true;
		} catch (PDOException $e) {
			# call the get_error function
			$this->get_error($e);
		}
	}

	# display error
	public function get_error($e)
	{
		$this->connection = null;
		die($e->getMessage());
	}

	# closes the database connection when object is destroyed
	public function __destruct()
	{
		# set the handler to NULL closes the connection propperly
		$this->connection = null;
	}
}
