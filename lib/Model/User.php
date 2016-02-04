<?php

namespace MyApp\Model;

class User extends \MyApp\Model {
		
		public function create($values) {
			$stmt = $this->db->prepare("insert into users (club, email, password,  created, modified) values(:club, :email, :password, now(), now())");
			$res = $stmt->execute([
			':club' => $values['club'],
	 	    ':email' => $values['email'],
		    ':password' => password_hash($values['password'], PASSWORD_DEFAULT)
	        ]);
	if($res === false) {
			throw new \MyApp\Exception\DuplicateEmail();
   }
  }
  
  		public function login($values) {
		  $stmt = $this->db->prepare("select * from users where club = :club");
		  $stmt->execute([
		  	':club' => $values['club']
	]);
		  $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
		  $user = $stmt->fetch();

		  if (empty($user)) {
		  	throw new \MyApp\Exception\UnmatchEmailOrPassword();
		  }
		
		  if (!password_verify($values['password'], $user->password)) {
		    throw new \MyApp\Exception\UnmatchEmailOrPassword();
		  }
	
			return $user;
		}

		public function findAll() {
			$stmt = $this->db->query("select * from users order by id");
			$stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
			return $stmt->fetchAll();
		}

}

