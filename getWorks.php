<?php 

function getWorks($select) {

$query = null;

	switch($select){
		case 'articles':
		$query = 'http://mobidel1.18r.ru/api/articles.php?action=getArticlesBranch&user=aash&pass=123456&idArticle=0&wid=1&webAPI=1';
		break;
		case 'mobile':
		$query = 'http://mobidel1.18r.ru/api/mobileApps.php?action=getTypesMobileMenuApp&user=aash&pass=123456&idApp=1&webAPI=1';
		break;
		case 'services':
		$query = 'http://mobidel1.18r.ru/api/services.php?action=getService&user=aash&pass=123456&idService=1621593598900183063&wid=1&cid=1&webAPI=1';
		break;
	}
	
	
	if(!empty($query)){
		$ch = curl_init($query);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_POST, true); // указываем параметр для данного урл, в данном случаии метод запроса урл
		$out = curl_exec($ch);
		curl_close($ch);
	}
	
	
	if($out!= null){
		$js = json_decode($out, true);
	}
	return $js;
}

$arr = getWorks();

print_r($arr);


?>