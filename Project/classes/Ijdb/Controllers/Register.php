<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;

class Register {
	private $utilisateursTable;	
private $superviseursTable;	
private $employesTable;
private $pdo;

	public function __construct(\globalrh\DatabaseTable $utilisateursTable,\globalrh\DatabaseTable $employesTable,\globalrh\DatabaseTable $superviseursTable,$pdo,\globalrh\Authentication $authentication) {
		$this->utilisateursTable = $utilisateursTable;
		$this->employesTable = $employesTable;
		$this->superviseursTable = $superviseursTable;
		$this->authentication = $authentication;
		$this->pdo = $pdo;
		
	}
	public function getSession(){
		$this->utilisateursTable->find('login', $_SESSION['username']);
		return ['template' => 'layout.html.php', 
				'title' => 'Register an account'];
	}

	public function registrationForm() {
		return ['template' => 'layout.html.php', 
				'title' => 'Register an account'];
	}

public function edit() {
if (isset($_GET['id'])) {
$utilisateur = $this->utilisateursTable->findById($_GET['id']);
}
$title = 'Edit utilisateur';
return ['template' => 'editutilisateur.html.php',
'title' => $title,
'variables' => [
'utilisateur' => $utilisateur ?? null
]
];
}
public function saveEdit() {
$utilisateur = $_POST['utilisateur'];
$this->utilisateursTable->save($utilisateur);
$id_utilisateur=$this->pdo->lastInsertId();
if($utilisateur['permissions']==32):
			$super['id_utilisateur']=$id_utilisateur;
			$super['id']='';
			$this->superviseursTable->save($super);
			else:
			$super['id_utilisateur']=$id_utilisateur;
			$super['id']='';
			$this->employesTable->save($super);
			endif;
header('location: /utilisateur/list');
}
	public function success() {
		
		$compte = $this->authorsTable->find('login', $_SESSION['username']);
		return ['template' => 'loginsuccess.html.php', 
				'variables'=>[
				'compte'=> $compte ?? NULL
				],
			    'title' => 'Registration Successful'];
	}

	public function registerUser() {
		$utilisateur = $_POST['utilisateur'];

		//Assume the data is valid to begin with
		$valid = true;
		$errors = [];

		//But if any of the fields have been left blank, set $valid to false
		if (empty($utilisateur['nom'])) {
			$valid = false;
			$errors[] = 'Name cannot be blank';
		}
			if (empty($utilisateur['prenom'])) {
			$valid = false;
			$errors[] = 'Name cannot be blank';
		}
		if (empty($utilisateur['email'])) {
			$valid = false;
			$errors[] = 'Email cannot be blank';
		}
		else if (filter_var($utilisateur['email'], FILTER_VALIDATE_EMAIL) == false) {
			$valid = false;
			$errors[] = 'Invalid email address';
		}
		else { //if the email is not blank and valid:
			//convert the email to lowercase
			$utilisateur['email'] = strtolower($utilisateur['email']);

			//search for the lowercase version of `$author['email']`
			if (count($this->utilisateursTable->find('email', $utilisateur['email'])) > 0) {
				$valid = false;
				$errors[] = 'That email address is already registered';
			}
		}
	if (count($this->utilisateursTable->find('login', $utilisateur['login'])) > 0) {
				$valid = false;
				$errors[] = 'That login is already registered';
			}

		
		if (empty($utilisateur['password'])) {
			$valid = false;
			$errors[] = 'Password cannot be blank';
		}

		//If $valid is still true, no fields were blank and the data can be added
		if ($valid == true) {
			//Hash the password before saving it in the database
			$utilisateur['password'] = password_hash($utilisateur['password'], PASSWORD_DEFAULT);

			//When submitted, the $author variable now contains a lowercase value for email
			//and a hashed password
			$this->utilisateursTable->save($utilisateur);
			if($utilisateur['permissions']==32):
			$super['id_utilisateur']=$this->pdo->lastInsertId();
			$super['id']='';
			$this->superviseursTable->save($super);
			else:
			$super['id_utilisateur']=$this->pdo->lastInsertId();
			$super['id']='';
			$this->employesTable->save($super);
			endif;
			
			session_start();
			session_regenerate_id();
			$_SESSION['username'] = $utilisateur['email'];
			$_SESSION['password'] = $utilisateur['password'] ;
			header('location: /register/success');
		

		}
		else {
			//If the data is not valid, show the form again
			return ['template' => 'layout.html.php', 
				    'title' => 'erreur',
				    'variables' => [
				    	'errors' => $errors,
				    	'utilisateur' => $utilisateur
				    ]
				   ]; 
		}
	}

	public function list() {
		$utilisateurs = $this->utilisateursTable->findAll();
$user = $this->authentication->getUser();
		return ['template' => 'listutilisateur.html.php',
				'title' => 'utilisateur List',
				'variables' => [
						'utilisateurs' => $utilisateurs,
						'user' => $user
					]
				];
	}
	
	public function desactiver() {
$utilisateur['id'] = $_GET['id'];
$utilisateur['etat'] = '0';
$this->utilisateursTable->save($utilisateur);
header('location: /utilisateur/list');
}
	public function activer() {
$utilisateur['id'] = $_GET['id'];
$utilisateur['etat'] = '1';

$this->utilisateursTable->save($utilisateur);
header('location: /utilisateur/list');
}

	public function permissions() {

		$utilisateur = $this->utilisateursTable->findById($_GET['id']);

		$reflected = new \ReflectionClass('\Ijdb\Entity\Utilisateur');
		$constants = $reflected->getConstants();

		return ['template' => 'permissions.html.php',
				'title' => 'Edit Permissions',
				'variables' => [
						'utilisateur' => $utilisateur,
						'permissions' => $constants
					]
				];	
	}
public function delete() {
$this->utilisateursTable->delete($_GET['id']);
header('location: /utilisateur/list');
}
	public function savePermissions() {
		$utilisateur = [
			'id' => $_GET['id'],
			'permissions' => array_sum($_POST['permissions'] ?? [])
		];

		$this->utilisateursTable->save($utilisateur);

		header('location: /utilisateur/list');
	}
}