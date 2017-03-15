<?php 
		//запуск экшна getService
		//инициализируем ресурс
  if( $ch = curl_init() ) {
    curl_setopt($ch, CURLOPT_URL, 'http://mobidel1.18r.ru/api/services.php'); // применяем параметры урлы
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); // это тествая опция для возврата результата в качестве строки 
    curl_setopt($ch, CURLOPT_POST, true);// метод передачи пост или HTTPGET 
    curl_setopt($ch, CURLOPT_POSTFIELDS, "action=getService&user=aash&pass=123456&idService=1622152171148004827&wid=1612716818034554760");
		//параметры передачи
    $out = curl_exec($ch); 
    echo $out;// выполнение запроса 
			$info = curl_getinfo($ch); var_dump($info); // вывод инфы хттп запроса
    curl_close($ch); // закрываем запрос cURl
  }

?>
<hr>

<?php 
//вариант попроще
//экшн getTypesMobileMenuApp

function getWorks() {
	//инициализируем $ch урл ресурс
	$ch = curl_init('http://mobidel1.18r.ru/api/mobileApps.php?action=getTypesMobileMenuApp&user=aash&pass=123456&idApp=3825258509428565262');
	curl_setopt($ch, CURLOPT_POST, true); // указываем параметр для данного урл, в данном случаии метод запроса урл
	curl_exec($ch);
			$info = curl_getinfo($ch); var_dump($info['url']); // вывод инфы хттп запроса url
		$res = curl_close($ch);
	return $res;
	
}

$arr[]= getWorks();
echo "<br>";
print_r($arr);

?>
<hr>
<?php 
//action = getArticlesBranch
// test's

function tests(){

$url = 'http://mobidel1.18r.ru/api/services.php?action=getService&user=aash&pass=123456&idService=1622152171148004827&wid=1612716818034554760';

		$ch = curl_init($url); //resours
		
		curl_setopt($ch, CURLOPT_HTTPGET, true); //method GET

		curl_exec($ch);  // 

		$info = curl_getinfo($ch);  // -- получаем информацию по данным ресурса запроса. 

		print_r($info['url']);

	curl_close($ch); // закрываю запросы курлы
}

$t = array(tests());
?>

<br>
<h1><?php var_dump($t); ?></h1>
