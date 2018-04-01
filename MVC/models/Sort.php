<?php
class Sort
{
	public function getPagination($sortname, $page = 1){
		$db = Db::getConnection();
		//Получить поличество записей
		$result = $db->query("SELECT id FROM quests");
		$i=0;
		while ($row = $result->fetch()) {
			$questsList[$i]['id'] = $row['id'];	
			$i++;
		}
		$total = count($questsList); 
		$page = intval($page);
		$offset = ($page - 1) * 3;
		$count_page = ceil($total / 3);
		for ($i=0; $i < $count_page; $i++) {
			$paginationLink[$i]['link'] = 'sort='.$sortname.'&page-'.($i+1);
			$paginationLink[$i]['num'] = $i+1;
		}
		return $paginationLink;
	}

	public function getQuestSort($sortname, $page = 1)
	{
		$db = Db::getConnection();

		$page = intval($page);
		$offset = ($page - 1) * 3;
		$sorting = $sortname;
		switch ($sorting) {
			case 'name':
				$sorting = 'name ASC';
				break;
			case 'email':
				$sorting = 'e_mail ASC';
				break;
			case 'ready':
				$sorting = 'ready ASC';
				break;
			default:
				$sorting = 'id DESC';
				break;
		}
		$questsList = array();
		$result = $db->query("SELECT * FROM quests ORDER BY $sorting LIMIT 3 OFFSET $offset");
		$i=0;
		while ($row = $result->fetch()) {
			$questsList[$i]['id'] = $row['id'];
			$questsList[$i]['name'] = $row['name'];
			$questsList[$i]['e_mail'] = $row['e_mail'];
			$questsList[$i]['text'] = $row['text'];
			if ($row['ready'] == '1') {
				$questsList[$i]['ready'] = 'Выполнено!';
			}else{
				$questsList[$i]['ready'] = 'Не выполнено!';
			}	
			$i++;
		}
		return $questsList;
	}
}