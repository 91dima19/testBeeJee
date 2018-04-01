<?php
class SortController 
{
	public function actionSort($sortname, $page = 1)
	{
		//$sorting = Sort::getQuestSort($sortname);
		$questsList = Sort::getQuestSort($sortname, $page);
		$paginationLink = Sort::getPagination($sortname, $page);

		//echo $userId;
		require_once(ROOT.'/view/quests/index.php');
		return true;
	}
}
?>
