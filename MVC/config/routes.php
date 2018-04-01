<?php
return array(
	'add' => 'add/add',
	'login' => 'login/login',
	'sort=([a-z]+)&page-([0-9]+)' => 'sort/sort/$1/$2',
	'sort=&page-([0-9]+)' => 'sort/sort/name/$1',
	'sort=([a-z]+)' => 'sort/sort/$1',
	'sort=' => 'sort/sort/name',
	'sort' => 'sort/sort/name',
	'' => 'sort/sort/name',
);
?>