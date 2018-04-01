<?php
include_once ROOT.'/models/Add.php';
class AddController 
{
	public function actionAdd()
	{
		$name = '';
		$email = '';
		$text = '';
		
		if(isset($_POST['add'])){
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$text = trim($_POST['text']);

			$errors = false;
			if (strlen($name)<=2) {
				$errors[] = '- Проверьте имя!';
			}
			if (strlen($email)<=4) {
				$errors[] = '- Проверьте Email!';
			}
			if (strlen($text)<=10) {
				$errors[] = '- Проверьте текст!';
			}
			
			if ($errors == false) {
				$result = Add::rowAdd($name, $email, $text);
			}

			//$db->mysql_query("INSERT INTO quests(name, e_mail, text) VALUES ('$name', '$email', $text)");
			
		}
		$db = Db::getConnection();
		$addList = array();
		$addList = Add::rowAdd();
		require_once(ROOT.'/view/quests/addquest.php');
		return true;
	}
}
?>