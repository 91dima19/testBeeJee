<?php
class Login
{
	public function checkUserData($login, $password){
		$db = Db::getConnection();

		$sql = 'SELECT * FROM admin WHERE login = :login AND password = :password';
		$result = $db->prepare($sql);
		$result->bindParam(':login', $login, PDO::PARAM_INT);
		$result->bindParam(':password', $password, PDO::PARAM_INT);
		$result->execute();

		$user = $result->fetch();
		if ($user) {
			return $user['id'];
		}
		return false;
	}

	public function auth($userId){
		session_start();
		$_SESSION['logget_user'] = $userId;
	}

	public static function checkLogged(){
		session_start();
		if (isset($_SESSION['logget_user'])) {
			echo "вызывается";
			return $_SESSION['logget_user'];
		}
		
	}

}
?>