<?php

require SITE_ROOT.'/includes/config_db.php';

class Database
{

  protected $connection;

  public function __construct()
  {
    $this->openConnection();
  }

  public function getConnection() {
    return $this->connection;
  }

  public function openConnection()
  {
    try {
      $this->connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }

  public function escapeString($string)
  {
    $escaped_string = $this->connection->real_escape_string($string);
    return $escaped_string;
  }

}

$db = new Database();
$database = $db->getConnection();

?>
