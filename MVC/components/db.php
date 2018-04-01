<?php
class Db
{
	public static function getConnection()
	{
		$host = 'MVC';
		$dbname = 'mvc_quest';
		$user = 'root';
		$password = '';
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
		//$connection = mysql_connect("mysql:host=$host;dbname=$dbname", $user, $password);
		//exit(mysql_error());

		return $db;
	}
}
?>