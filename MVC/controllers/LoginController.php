<?php
include_once ROOT.'/models/Login.php';
class LoginController 
{
	public function actionLogin()
	{
		$login = '';
		$password = '';

		if (isset($_POST['add'])) {
			$login = $_POST['login'];
			$password = $_POST['password'];

			$errors = false;
			if (strlen($login) < 1) {
				$errors[] = '- Проверьте логин!';
			}
			if (strlen($password) < 1) {
				$errors[] = '- Проверьте пароль!';
			}

			$userId = Login::checkUserData($login, $password);

			if ($userId == false) {
				$errors[] = '- Нерпавильные данные для входа';
			} else {
				Login::auth($userId);
				echo "Вы авторизированы!";
				//header("Location: google.ru");
			}
		}
		require_once(ROOT.'/view/user/logout.php');
		return true;
	}
}
?>