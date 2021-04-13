<?php
$mysqli = new mysqli('localhost','giasu635_msdc','msdc!2020', 'giasu635_msdc') or die (mysql_error());
$mysqli->query('set names utf8');	
		
echo "<h1>Hello, PHP!</h1>";
$url = "https://spreadsheets.google.com/feeds/list/1z4XgJcZZnu5hkMWS2bwHERswRKaEH0Uf6aEM0bx9MVc/od6/public/basic?alt=json";
// $url = "https://spreadsheets.google.com/feeds/list/1z4XgJcZZnu5hkMWS2bwHERswRKaEH0Uf6aEM0bx9MVc/o1m4hfe/public/basic?alt=json";
$data = json_decode(file_get_contents($url), true);
// echo '<pre>';
// print_r($data);
// die();
$mysqli->query("TRUNCATE `ck_table1`");

$sensors = array();
foreach($data['feed']['entry'] as $entry) {
	
	$content = $entry['content']['$t'];
	
	   $s = explode(', ', $content);
            $temp = array();
            foreach($s as $line) {
                list($k, $v) = explode(': ', $line);
                $k = preg_replace('/\s+/', '', $k); 
				trim($v); // cleaning
				// trim($k); // cleaning
                $temp[$k] = $v;
            }

            $sensors[] = $temp;
	
}

// echo '<pre>';
// print_r($sensors);


foreach($sensors AS $sensor){
	$sql_1 = "INSERT INTO `ck_table1`"; 
	$value_sql_1 = '';
	$value_sql_c = '';
	foreach($sensor AS $key => $data){
		$value_sql_1 .=',`';
		$value_sql_1 .= $key;
		$value_sql_1 .='`';
	
		$value_sql_c .= ",\"";
		$value_sql_c .= @trim($data);
		$value_sql_c .= "\"";	
	
		// $value_sql_c .= "$data";
	}

	$sql_1 .= '(';
	$sql_1 .= substr($value_sql_1, 1, strlen($value_sql_1));
	$sql_1 .= ')';

	$sql_1 .= ' VALUES ';
	$sql_1 .= '(';
	$sql_1 .= substr($value_sql_c, 1, strlen($value_sql_c));
	$sql_1 .= ');';
// echo $sql_1;
// echo "<br/><br/><br/>";
$mysqli->query($sql_1);
}



?>