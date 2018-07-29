<?php
// src/Model/Entity/User.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{
	// array for what can be updated
	protected $_accessible = [
			'*' => true,
			'id' => false,
			'email' => false,
	];
}
?>
