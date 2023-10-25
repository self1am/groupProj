<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'GroupProj');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/GroupProject/public');

}else
{
	/** database config **/
	define('DBNAME', 'GroupProj');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.iQube.com');

}

define('APP_NAME', "iQube");
define('APP_DESC', "Empowering Education through Personalizing Learnign");

/** true means show errors **/
define('DEBUG', true);
