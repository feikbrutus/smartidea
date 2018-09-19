<?php 
mb_internal_encoding("UTF-8");
include ('simplehtmldom_1_5/simple_html_dom.php');
//			background: php echo getRandColor();
function getRandColor(){
	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
	$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
	return $color;
}
function getReverseColor(){
	
	return getRandColor();
} 
//echo "$random: ".$title_article;
//print "".getRandArticle();
function getRandArticle(){
	$html_num = file_get_html('http://feeds.feedburner.com/originsorgua?format=xml');
	$last_num_article = $html_num->find('guid',0);
	$last_num = preg_replace("/[^0-9]/", '', $last_num_article);
	//echo "Вcего статей в системе ".$all=$last_num-325;
	//echo '<br>';
	//echo 'Номер последнего заголовка:'.$last_num;
	//echo '<br>';
	a:
	$random = rand(325,$last_num);
	$html = file_get_html('http://www.origins.org.ua/page.php?id_story='.$random); //325 номер первой статьи вседи всех
	foreach($html->find('h1') as $element) 
	$article = $element->innertext;
	if($article == ""){
		goto a;
	}
	$title_article = iconv('windows-1251', 'UTF-8', $article) . '<br>';
	
	//return "$random: ".$title_article;
	//return '<a style="text-decoration: none; color:'.getReverseColor().';" href='."http://www.origins.org.ua/page.php?id_story=".$random.'>'.$title_article.'</a>';
	return '<a style=" " href='."http://www.origins.org.ua/page.php?id_story=".$random.'>'.$title_article.'</a>';
}

?>