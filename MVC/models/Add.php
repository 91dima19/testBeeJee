<?php
class Add
{
	public function rowAdd($name, $email, $text){
		$db = Db::getConnection();
		$sql = 'INSERT INTO quests (name, e_mail, text) '
		. 'VALUES (:name, :e_mail, :text)';

		$result = $db->prepare($sql);
		$result->bindParam(':name', $name, PDO::PARAM_STR);
		$result->bindParam(':e_mail', $email, PDO::PARAM_STR);
		$result->bindParam(':text', $text, PDO::PARAM_STR);
		return $result->execute();
	}
}
?>