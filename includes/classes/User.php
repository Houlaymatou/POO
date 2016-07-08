<?php

class User extends DBRecord
{
  protected static $dbTable = "users";
  protected static $dbFields = array('username', 'password', 'firstName', 'lastName');
  protected $id;
  protected $username;
  protected $password;
  protected $firstName;
  protected $lastName;
}

?>
