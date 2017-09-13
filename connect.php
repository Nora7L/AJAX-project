<?PHP
    error_reporting(E_ALL ^ E_DEPRECATED);
	header("Content-type: text/html; charset=utf-8");
	$con = mysql_connect('localhost','root','');
	mysql_select_db('mymusic');
	mysql_query('set names utf8');

?>