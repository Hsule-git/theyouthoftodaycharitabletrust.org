<?php
class Database
{
public $con;
public $hostname="localhost";
public $username="root";//cssfound_leader
public $pass="";//
public $dbname="cssfound_success2";
public function __construct()
{

	$this->con=new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
	if($this->con->connect_error)
	{
		echo "Database Connection is Failed";
		exit;
	}
}

public function insert($query)
{
	$resource=$this->con->query($query);
	return $resource;

}

public function select($query)
{
	$result=$this->con->query($query);
	return $result;

}
public function update($query)
{
	$result=$this->con->query($query);
	return $result;

}
public function deleted($query)
{
	$result=$this->con->query($query);
	return $result;

}
public function errors($msg)
{
	$result=$msg;
	return $result;

}

public function real_sc($msg)
{
	$result=$this->con->real_escape_string($msg);
	return $result;

}

public function admin($content){

	$result=$this->con->query($content);
	return $result;


}




}



?>
