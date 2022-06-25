<?php

require_once PROJECT_ROOT_PATH . "\Models\Database.php";
 
class UserModel extends Database
{
  public function getUsers($limit)
  {
    return $this->select("SELECT * FROM users ORDER BY id ASC LIMIT ?", ["i", [$limit]]);
  }

  public function createUser($params)
  {
    $name = $params->name;
    $email = $params->email;
    $phone = $params->phone;

    return $this->insert("INSERT INTO users(name, email, phone) VALUES(?, ?, ?)", ["sss", [$name, $email, $phone]]);
  }
}