<pre>
<?php 
	// var_dump(file_get_contents('music_info.json'));
	// var_dump(json_decode(file_get_contents('music_info.json')));
	// var_dump(json_decode(file_get_contents('music_info.json'),true));
	$json = '{
		"name": "lalala",
		"age": 17
	}';
	json_encode($json);
	var_dump($json);
	file_put_contents('test.json', $json,FILE_APPEND);
 ?>
 </pre>
json文件：以json的规则表述字符串、数组、对象……
file_get_contents('music_info.json')，将文件读入到一个字符串中，不解码就是一个有json格式的字符串