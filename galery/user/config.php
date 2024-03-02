<?php session_start();
define('DBNAME','web');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','gallery');
try {
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Your page is connected with database successfully..";
} catch(PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}
?>