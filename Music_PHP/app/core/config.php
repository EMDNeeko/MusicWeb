<?php
if($_SERVER['SERVER_NAME'] == "localhost"){
    define("ROOT","http://localhost:8080/Music_PHP/public");
    define("DBDRIVER", "mysql");
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "music_web_db");
}else{
    define("ROOT","http://www.mywebsite.com");
    define("DBDRIVER", "mysql");
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "music_web_db");
}
